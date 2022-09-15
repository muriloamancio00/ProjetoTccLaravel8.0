<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TipoProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('tipoprodutos')->insert([
                'id' => $i,
                'name' => Str::random(15),
                'descricao' => Str::random(50),
                'ativo' =>  rand(0, 1),
            ]);
        }
    }
}
