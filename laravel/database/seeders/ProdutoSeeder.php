<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Double;
use Ramsey\Uuid\Type\Integer;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('produtos')->insert([
                'nome' => Str::random(15),
                'preco' => rand(),
                'id_tipoProduto'=>$i,
                'descricao' => Str::random(15),
                'ativo' => 1,
            ]);
        }
    }
}
