<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $arr_cat = ['administradores', 'feirante', 'bancas', 'eventos', 'feiras', 'listaProdutos', 'produtos','categorias', 'horarios',];
        $arr_pag = ['index', 'create', 'edit', 'show'];

        foreach ($arr_cat as $cat) {
            foreach ($arr_pag as $pag) {
                DB::table('resources')->insert([
                    'name' => $cat . '.' . $pag,
                ]);
            }
        }



    }
}
