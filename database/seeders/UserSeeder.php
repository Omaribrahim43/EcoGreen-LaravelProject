<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
public function run(){DB::table('users')->insert([['name' => 'User','email' => 'user@gmail.com','password' => bcrypt('password')],]);}
}