<?php

namespace Database\Seeders;

use App\Models\FeiraModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;

class FeiraSeeder extends Seeder
{


    public function run(FeiraModel $feira): void
    {

        $faker = Factory::create('pt_BR');

        for ($i = 0; $i < 10; $i++) {
            DB::table('feiras')->insert([
                'endereco' => $faker->streetName,
                'horario' => $faker->time('H_i_s'),
                'diaSemana' => $faker->dayOfWeek(),
                'id_Administrador'=>1,
            ]);

        }
        /*public function run()
        {
            for ($i = 1; $i <= 10; $i++) {
                DB::table('feiras')->insert([
                    'endereco' => Str::random(15),
                    'horario' => Str::random(15),
                    'diaSemana' => Str::random(15),
                    'id_Administrador'=>1,
                ]);
            }
        }*/
    }
}
