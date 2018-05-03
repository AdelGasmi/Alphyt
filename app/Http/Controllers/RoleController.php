<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('dashboard.role.index')->with([
            'title' => 'Categories'
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

        Role::create([
            'name' => $request->get('name')
        ]);

        Session::Flash('success', 'Le processus a été avec succès');
        return redirect()->back();
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
        $role = Role::find($id);

        $role->update([
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
        Role::destroy($id);
        return redirect()->back();
    }
}
