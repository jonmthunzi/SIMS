<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    


    public function run() {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries

        DB::table('users')->insert([
          'fname' => 'admin',
          'sname' => 'user',
          'username' => 'admin',
          'email' => 'admin@gmail.com',
          'role' => 'admin',
          'gender' => 'male',
          'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
          'fname' => 'student',
          'sname' => 'user',
          'username' => 'cen/01/17',
          'email' => 'student@gmail.com',
          'role' => 'student',
          'gender' => 'male',
          'password' => Hash::make('password'),
        ]);
      }
}
