<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all()->except(Auth::id());

        return view('admin.users.index', compact('users'));

        //The except(Auth::id()) method is to exclude the current
        //logged-in user (i.e. Admin). So, all the users will be 
        //fetched from the database except the Admin.
        //
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());

        return to_route('admin.users.index')->with('message', 'User updated.');
    
    //The 'UserUpdateRequest' passed in above method is defined 
    //at 'app\Http\Requests\'. The validation of updated data is 
    //being validated by 'UserUpdateRequest.php'
    
    }


    public function destroy(User $user)
    {
        $user->delete();
        return to_route('admin.users.index')->with('message', 'User deleted.');
    }



}
