<?php

namespace App\Http\Controllers;

use App\CategorieField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FieldController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
        ];


        $this->validate($request, $rules);

        CategorieField::create($request->all());

        Session::Flash('success', 'Le processus a été avec succès');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $field = CategorieField::find($id);
        $field->update([
            'name' => $request->input('name')
        ]);
        Session::Flash('success', 'Modifié avec succès');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategorieField::destroy($id);
        return redirect()->back();
    }
}
