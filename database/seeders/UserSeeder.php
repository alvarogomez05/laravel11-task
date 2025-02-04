<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Administrador',
            'email'=>'admin@example.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('1234'),
            'remember_token'=>Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Alvaro',
            'email' => 'alvaro@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
