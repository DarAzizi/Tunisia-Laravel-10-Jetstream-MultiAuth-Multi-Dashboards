<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
{
        DB::table('users')->insert([
        // Admin Seeder Data
        [
            'name' =>'Admin',
            'email'=>'admin@site.com',
            'password'=>Hash::make('12345678'),
            'role_id'=>'1',
            'mobile'=>'27774075',
        ],

        // Agent Seeder Data
        [
            'name' =>'Seller',
            'email'=>'seller@site.com',
            'password'=>Hash::make('12345678'),
            'role_id'=>'3',
            'mobile'=>'27774076',
        ],
        // Agent Seeder Data
        [
            'name' =>'User',
            'email'=>'user@site.com',
            'password'=>Hash::make('12345678'),
            'role'=>'2',
            'mobile'=>'27774077',
        ],

    ]);
}
}
