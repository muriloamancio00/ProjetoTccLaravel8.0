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
            'email' => 'murilo@murilo.com',
            'password' => Hash::make('11111111'),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Helena Karol Pinheiro Maia',
            'email' => 'helena@helena.com',
            'password' => Hash::make('11111111'),
            'role_id' => 2,
        ]);

    }
}
