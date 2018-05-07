<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Product;
use App\ValueField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.product.index')->with([
            'products' => Product::all(),
            'title' => 'Produits'
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.add')->with([
            'title' => 'Ajouter Product'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'img' => 'required|image',
        ];


        $this->validate($request, $rules);

        $img = time() . '.' . $request->file('img')->getClientOriginalExtension();
        Image::make($request->file('img'))->save(public_path('img/product/' . $img));

        Product::create([
            'title' => $request->get('title'),
            'categorie_id' => $request->get('categorie_id'),
            'img' => $img
        ]);

        Session::Flash('success', 'Le processus a été avec succès');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.product.edit')->with([
            'product' => Product::find($id),
            'title' => 'Produits'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Product = Product::find($id);
        if ($request->hasFile('img')) {
            Image::make($request->file('img'))->save(public_path('articles_img/' . $article->img));
        }
        $Product->update([
            'title' => $request->get('title'),
            'categorie_id' => $request->get('categorie_id'),
        ]);
        Session::Flash('success', 'Modifié avec succès');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storawge.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back();
    }


    public function more(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        return view('dashboard.product.more')->with([
            'product' => $product,
            'title' => $product->name . '- Details'
        ]);
    }


    public function updateFields(Request $request, $product_id)
    {
        $product = Product::find($product_id);

        $categorie = Categorie::find($product->categorie_id);

        foreach ($categorie->fields as $field) {
            $bool = false;
            foreach ($product->values as $value) {
                if ($value->field_id == $field->id) {
                    $bool = true;
                    $value->update([
                        'value' => $request->get($field->id)
                    ]);
                }
            }
            if (!$bool) {
                ValueField::create([
                    'product_id' => $product->id,
                    'field_id' => $field->id,
                    'value' => $request->get($field->id)
                ]);
            }
        }
        return redirect()->back();
    }

}
