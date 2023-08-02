<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class HorariosFeiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horarioFeira = [
            ['horario' => '10:00'],
            ['horario' => '10:30'],
            ['horario' => '11:00'],
            ['horario' => '11:30'],
            ['horario' => '12:00'],
            ['horario' => '12:30'],
            ['horario' => '13:00'],
            ['horario' => '13:30'],
            ['horario' => '14:00'],
            ['horario' => '14:30'],
            ['horario' => '15:00'],
            ['horario' => '15:30'],
            ['horario' => '16:00'],
            ['horario' => '16:30'],
            ['horario' => '17:00'],
            ['horario' => '17:30'],
            ['horario' => '18:00'],
            ['horario' => '18:30'],
            ['horario' => '19:00'],
            ['horario' => '19:30'],
            ['horario' => '20:00'],
            ['horario' => '20:30'],
        ];

        DB::table('horariosFeira')->insert($horarioFeira);
    }

}
