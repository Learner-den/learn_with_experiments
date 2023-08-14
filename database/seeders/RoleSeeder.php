<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      

        //Now let us create another role named 'admin' in our 'roles'
        //table using the Role Model, and assign it to a variablw $adminRole
        $adminRole = Role::create([
            'name' => 'admin'    
        ]);

        //Now let us create another role named 'editor' in our 'roles'
        //table using the Role Model, and assign it to a variable $editorRole
        $editorRole = Role::create([
            'name' => 'editor'        
        ]);

        //Let us create our first role named 'user' in our 'roles' 
        //table using the Role Model, and assign it to a variable $userRole
        $userRole = Role::create([
            'name' => 'user'
    
        ]);       
    }
}
