<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class FeiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i < 10; $i++) {
            DB::table('feiras')->insert([
                'nome'=> $faker->sentence($nbWords = 3, $variableNbWords = true),
                'endereco' => $faker->streetAddress,
                'horario' => $faker->time($format = 'H:i:s', $max = 'now'),
                'diaSemana' => $faker->dayOfWeek,
                'id_Administrador'=>1,
            ]);
        }
    }
}
