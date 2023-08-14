<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\User;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRoleId = 1; 
        $editorRoleId = 2; 
        $defaultRoleId = 3; 

        $users = [
            [
                'name'                  => 'Rehman',
                'role_id'			    => $adminRoleId,
                'joining_date'          => DB::raw("STR_TO_DATE('01/15/2015', '%m/%d/%Y')"),
                'email'                 => 'rehman@gmail.com',
                'password'              =>  bcrypt('12345678'),
                'dob'                   =>  DB::raw("STR_TO_DATE('05/24/1978', '%m/%d/%Y')"),                

            ],

            [
                'name'                  => 'Saleem',
                'role_id'			    =>  $editorRoleId,
                'joining_date'          =>  DB::raw("STR_TO_DATE('01/18/2015', '%m/%d/%Y')"),
                'email'                 => 'saleem@admin.com',
                'password'              =>  bcrypt('12345678'),
                'dob'                   =>  DB::raw("STR_TO_DATE('11/20/1982', '%m/%d/%Y')"),                

            ],

            [
                'name'                  =>  'Mohsin',
                'role_id'			    =>  $defaultRoleId,
                'joining_date'          =>  DB::raw("STR_TO_DATE('01/19/2015', '%m/%d/%Y')"),
                'email'                 => 'mohsin@admin.com',
                'password'              =>  bcrypt('12345678'),
                'dob'                   =>  DB::raw("STR_TO_DATE('08/26/1995', '%m/%d/%Y')"),                

            ],

            [
                'name'                  =>  'Kamal',
                'role_id'			    =>  $defaultRoleId,
                'joining_date'          =>  DB::raw("STR_TO_DATE('01/06/2015', '%m/%d/%Y')"),
                'email'                 =>  'kamal@admin.com',
                'password'              =>  bcrypt('12345678'),
                'dob'                   =>  DB::raw("STR_TO_DATE('01/09/1998', '%m/%d/%Y')"),                

            ],

            [
                'name'                  =>  'Javed',
                'role_id'			    =>  $defaultRoleId,
                'joining_date'          =>  DB::raw("STR_TO_DATE('01/10/2015', '%m/%d/%Y')"),
                'email'                 =>  'javed@admin.com',
                'password'              =>  bcrypt('12345678'),
                'dob'                   =>  DB::raw("STR_TO_DATE('05/24/1999', '%m/%d/%Y')"),                

            ],

            [
                'name'                  =>  'Hafeez',
                'role_id'			    =>  $defaultRoleId,
                'joining_date'          =>  DB::raw("STR_TO_DATE('01/24/2015', '%m/%d/%Y')"),
                'email'                 =>  'hafeez@admin.com',
                'password'              =>  bcrypt('12345678'),
                'dob'                   =>  DB::raw("STR_TO_DATE('03/15/1999', '%m/%d/%Y')"),                

            ],

            [
                'name'                  =>  'Zahid',
                'role_id'			    =>  $defaultRoleId,
                'joining_date'          =>  DB::raw("STR_TO_DATE('02/05/2015', '%m/%d/%Y')"),
                'email'                 =>  'zahid@admin.com',
                'password'              =>  bcrypt('12345678'),
                'dob'                   =>  DB::raw("STR_TO_DATE('03/15/1999', '%m/%d/%Y')"),                

            ],

            
        ];

        User::insert($users);
    }
}
