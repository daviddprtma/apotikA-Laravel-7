<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     for($i=1; $i<6; $i++){
    //     DB::table('users') -> insert([
    //         'name' => Str::random(10),
    //         'email' => Str::random(10).'@gmail.com',
    //         'password' => Hash::make('password'),
    //     ]);
    // }
        DB::table('users') -> insert([
        'name' =>'Admin' ,
        'email' => 'admin@gmail.com',
        'password' => Hash::make('password'),
        ]);
    }
}