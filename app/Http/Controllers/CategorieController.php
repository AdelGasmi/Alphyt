<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategorieController extends Controller
{

    public function index()
    {
        return view('dashboard.categorie.index')->with([
            'categories' => Categorie::all(),
            'title' => 'Categories'
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categorie.add')->with([
            'title' => 'Ajouter Categorie'
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
            'name' => 'required',
        ];


        $this->validate($request, $rules);

        Categorie::create([
            'name' => $request->get('name')
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
        return view('dashboard.categorie.edit')->with([
            'categorie' => Categorie::find($id),
            'title' => 'Categorie'
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
        $categorie = Categorie::find($id);

        $categorie->update([
            'name' => $request->input('name')
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
        Categorie::destroy('id', $id);
        return redirect()->back();
    }

    public function more(Request $request, $categorie_id)
    {
        return view('dashboard.categorie.more')->with([
            'fields' => Categorie::find($categorie_id)->fields,
            'title' => 'Champs',
            'categorie_id' => $categorie_id,
        ]);
    }
}
