<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;


class RoleController extends Controller
{
    
    public function index()
    {
        $roles = Role::whereNotIn('name', ['admin'])->orderBy('id')->get();

        return view('admin.roles.index', compact('roles'));
    }

    

    public function create()
    {
        return view('admin.roles.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Role::create($validated);

        return to_route('admin.roles.index')->with('message', 'New Role Added successfully successfully.');
        
        //This 'message' is being called from "resources\views\components\admin-layout.blade.php"
        //and will be displayed on banner.
    }


    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }


    public function update(Request $request, Role $role)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $role->update($validated);

        return to_route('admin.roles.index')->with('message', 'The Role Updated successfully successfully.');

        //This 'message' is being called from "resources\views\components\admin-layout.blade.php"
        //and will be displayed on banner.
    }


    public function destroy(Role $role)
    {
        $role->delete();
        return to_route('admin.roles.index')->with('message', 'The Role Deleted successfully successfully.');
    }


    public function assignPermissions(Request $request, Role $role)
    {
        $role->permissions()->sync($request->permissions);
        return back()->with('message', 'Permissions added.');
    }

    




}
