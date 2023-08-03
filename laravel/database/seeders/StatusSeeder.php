<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['nome' => 'ativo', 'descricao' => 'Evento Ocorrera Normalmente!'],
            ['nome' => 'inativo', 'descricao' => 'Evento Cancelado!'],
            ['nome' => 'ocorrendo', 'descricao' => 'Evento Acontecendo Agora!'],
            ['nome' => 'finalizado', 'descricao' => 'Evento Finalizado!'],
            // Adicione mais registros conforme necessário
        ];

        DB::table('status')->insert($statuses);

    }
}
