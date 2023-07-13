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
            $nome = $faker->sentence($nbWords = 3, $variableNbWords = true);
            $endereco = $faker->streetAddress;
            $horarioInicio = $faker->time($format = 'H:i:s', $max = 'now');
            $horarioFim = $faker->optional()->time($format = 'H:i:s', $max = 'now');
            $latitude = $faker->optional()->latitude;
            $longitude = $faker->optional()->longitude;
            $diaSemana = $faker->optional()->dayOfWeek;
            $administrador_id = 1; // Defina o ID do administrador desejado
            $diaSemana_id = $faker->numberBetween(1, 7); // Defina o ID do dia da semana desejado

            DB::table('feiras')->insert([
                'nome' => $nome,
                'endereco' => $endereco,
                'horarioInicio' => $horarioInicio,
                'horarioFim' => $horarioFim,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'diaSemana' => $diaSemana,
                'administrador_id' => $administrador_id,
                'diaSemana_id' => $diaSemana_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
