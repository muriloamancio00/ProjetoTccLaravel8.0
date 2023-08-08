<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Double;
use Ramsey\Uuid\Type\Integer;
use Faker\Factory as Faker;

class BancaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $faker = Faker::create();

        //$feiranteId =~~ $faker->numberBetween(1,10);
        $feiraId =~~ $faker->numberBetween(1,5);

        for ($i = 1; $i <= 5; $i++) {
            DB::table('bancas')->insert([
                'nome' => $faker->name,
                'descricao' => 'Nada de especial temos aqui ! AINDA',
                'feira_id'=>$feiraId,
                'feirante_id' =>2,
            ]);
        }
    }
}
