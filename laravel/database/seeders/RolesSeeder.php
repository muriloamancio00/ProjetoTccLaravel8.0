<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $nome_role = ['Administrador','Feirante'];

        foreach($nome_role as $nome){
            DB::table('roles')->insert([
                'nome' => $nome,
            ]);
        }
    }

}
