<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
            'name' => 'Murilo Amancio da Silva',
            'email' => 'muriloamancio0@gmail.com',
            'password' => Hash::make('11111111'),
            'status' => 1,
            'role_id' => 1,

        ]);

    }
}
