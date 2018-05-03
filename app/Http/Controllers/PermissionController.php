<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        return view('dashboard.permissions.index')->with([
            'roles' => Role::all(),
            'title' => 'permissions',
            'active' => 'permissions'
        ]);
    }

    public function permissionsOf($role)
    {
        return view('dashboard.permissions.permission')->with([
            'permissions' => Permission::all(),
            'role' => Role::findByName($role),
            'title' => 'permissions',
            'active' => 'permissions'
        ]);
    }

    public function updatePermissionsOf(Request $request,$role)
    {
        $roleModel=Role::findByName($role);
            $permissions=[];
        foreach (Permission::all() as $permission) {
            if ($request->get($permission->id)){
                array_push($permissions,$permission->name);
            }
        }
        $roleModel->syncPermissions($permissions);

        return redirect()->back();
    }
}
