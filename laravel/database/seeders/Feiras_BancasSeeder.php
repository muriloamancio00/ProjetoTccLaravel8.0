<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class Feiras_BancasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++) {

                DB::table('feira__bancas')->insert([
                    'feira_id' => $j,
                    'banca_id' => $i,
                    'descricao' => Str::random(15),
                ]);
            }
        }


    }
}
