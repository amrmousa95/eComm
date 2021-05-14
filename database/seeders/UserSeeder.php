<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'ali Mohamed',
            'email'=>'ali@gmail.com',
            'password'=>bcrypt('123')
        ]);
    }
}
