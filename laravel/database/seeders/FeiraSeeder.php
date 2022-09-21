<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FeiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('feiras')->insert([
                'endereco' => Str::random(15),
                'horario' => Str::random(15),
                'diaSemana' => Str::random(15),
                'id_Administrador'=>1,
            ]);
        }
    }
}
