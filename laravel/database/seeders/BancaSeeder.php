<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Double;
use Ramsey\Uuid\Type\Integer;

class BancaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        for ($i = 1; $i <= 10; $i++) {
            DB::table('bancas')->insert([
                'nome' => Str::random(15),
                'id_Feira'=>$i,
                'id_ListaProduto' =>$i,
                'ativo' => 1,
            ]);
        }
    }
}
