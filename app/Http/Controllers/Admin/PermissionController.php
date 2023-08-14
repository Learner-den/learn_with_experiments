<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Permission::create($validated);

        return to_route('admin.permissions.index')->with('message', 'New Permission Added successfully successfully.');

        //This 'message' is being called from "resources\views\components\admin-layout.blade.php"
        //and will be displayed on banner.
    }



    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $permission->update($validated);

        return to_route('admin.permissions.index')->with('message', 'The Permission Updated successfully successfully.');
    
        //This 'message' is being called from "resources\views\components\admin-layout.blade.php"
        //and will be displayed on banner.
    }


    public function destroy(Permission $permission)
    {
        $permission->delete();
        return to_route('admin.permissions.index')->with('message', 'The Permission Deleted successfully successfully.');
    }


}
