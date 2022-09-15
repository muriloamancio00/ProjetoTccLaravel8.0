<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Murilo Amancio da Silva',
            'email' => 'muriloamancio0@gmail.com',
            'password' => Hash::make('murilo00'),
            'role_id' => 1,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Helena Karol Pinheiro Maia',
            'email' => 'helenamaia@hotmail.com',
            'password' => Hash::make('helena00'),
            'role_id' => 2,
        ]);

    }
}