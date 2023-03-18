<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('administradors')->insert([
            'nome' => 'Murilo Amancio da Silva',
            'email' => 'muriloamancio0@gmail.com',
            'senha' => Hash::make('11111111'),
            'status' => 1,
            'role_id' => 1,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            DB::table('administradors')->insert([
                'nome' => Str::random(15),
                'email'=>Str::random(15),
                'senha' =>Hash::make('11111111'),
                'status' => 1,
                'role_id' => 1,
            ]);
        }

    }
}
