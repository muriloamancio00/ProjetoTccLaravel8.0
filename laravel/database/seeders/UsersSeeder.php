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
            'nome' => 'Murilo Amancio da Silva',
            'email' => 'muriloamancio0@gmail.com',
            'senha' => Hash::make('11111111'),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'nome' => 'Helena Karol Pinheiro Maia',
            'email' => 'helenamaia@hotmail.com',
            'senha' => Hash::make('11111111'),
            'role_id' => 2,
        ]);

    }
}
