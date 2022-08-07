<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_logins')->insert([
            'email'=>Str::random(10).'gmail.com',
            'password'=>Hash::make('password'),
        ]);
        DB::table('user_logins')->insert([
            'email'=>Str::random(10).'gmail.com',
            'password'=>Hash::make('password'),
        ]);
    }
}
