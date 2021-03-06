<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Page;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function home()
    {
        return view('landing.welcome')->with([
            'active' => 'home-button'
        ]);
    }

    public function getPage($id, $title)
    {
        return view('landing.page')->with([
            'active' => $title . '-button',
            'page' => Page::find($id)
        ]);
    }

    public function index()
    {
        return view('dashboard.page.index')->with([
            'pages' => Page::all(),
            'title' => 'Pages'
        ]);
    }

    public function getProducts()
    {
        return view('landing.products')->with([
            'active' => 'products-button',
            'categories' => Categorie::all(),
        ]);
    }

    public function showProduct($id)
    {
        return view('landing.product')->with([
            'active' => 'products-button',
            'product' => Product::find($id),
        ]);
    }


    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];

        $this->validate($request, $rules);

        Page::create($request->all());

        Session::Flash('success', 'Le processus a été avec succès');
        return redirect()->back();
    }


    public function edit($id)
    {
        $page = Page::find($id);
        return view('dashboard.page.edit')->with([
            'page' => $page,
            'title' => 'Page- ' . $page->title
        ]);
    }

    public function update(Request $request, $id)
    {
        $page = Page::find($id);
        $page->update($request->all());
        Session::Flash('success', 'Modifié avec succès');
        return redirect()->back();
    }


    public function destroy($id)
    {
        Page::destroy('id', $id);
        return redirect()->back();
    }


}
