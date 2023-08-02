<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DiaSemanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diasSemana = [
            ['nome' => 'Segunda-feira'],
            ['nome' => 'Terca-feira'],
            ['nome' => 'Quarta-feira'],
            ['nome' => 'Quinta-feira'],
            ['nome' => 'Sexta-feira'],
            ['nome' => 'Sabado'],
            ['nome' => 'Domingo'],
        ];

        DB::table('diaSemana')->insert($diasSemana);
    }

}
