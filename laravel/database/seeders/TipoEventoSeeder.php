<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TipoEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('tipoEventos')->insert([
                'nome' => Str::random(15),
                'descricao' => Str::random(15),
                'ativo' => 1,
            ]);
        }
    }
}
