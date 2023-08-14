<?php

namespace App\Http\Controllers\Admin;

class AdminHomeController
{
    public function index()
    {        
        //Except some priviledges, the Driver is also like an admin
        //so, it will share admin panel with the Admin.                
        
        return view('admin.home');        
    }
}



