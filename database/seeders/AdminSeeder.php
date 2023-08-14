<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Let us create our first role named 'user' in our 'roles' 
        //table using the Role Model, and assign it to a variable $userRole

        $userRole = Role::create([
            'name' => 'user'
    
        ]);

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


        //Now let us create a first user in our 'users' table

        User::create([

        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
        'role_id' => $adminRole->id

        ]);


        //Now let us create a user in users table with editor role

        User::create([

            'name' => 'Imran',
            'email' => 'imran@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role_id' => $editorRole->id
    
            ]);
    }

}
