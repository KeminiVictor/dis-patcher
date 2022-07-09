<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

//use Illuminate\Support\Facades\DB;



class UserSeeder extends Seeder
{

    //use Illuminate\Support\Facades\DB;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([

        	'role' => 1,

        	'name' => 'Mark Frank',

        	'email' => 'markfrank2nite@gmail.com',

        	'password' => Hash::make('password')


        ]);

          \DB::table('users')->insert([
        	'role' => 2,

        	'name' => 'Victor Isemini',

        	'email' => 'victor@gmail.com',

        	'password' => Hash::make('password')


        ]);
    }
}
