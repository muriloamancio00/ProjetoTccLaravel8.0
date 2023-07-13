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
            ['nome' => 'ativo', 'descricao' => 'Descrição do status 1'],
            ['nome' => 'inativo', 'descricao' => 'Descrição do status 2'],
            ['nome' => 'ocorrendo', 'descricao' => 'Descrição do status 3'],
            ['nome' => 'finalizado', 'descricao' => 'Descrição do status 4'],
            // Adicione mais registros conforme necessário
        ];

        DB::table('status')->insert($statuses);

    }
}
