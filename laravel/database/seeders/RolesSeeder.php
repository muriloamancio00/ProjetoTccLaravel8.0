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
        
        $name_role = ['Administrador','Feirante'];

        foreach($name_role as $name){
            DB::table('roles')->insert([
                'name' => $name,
            ]);
        }
    }

}
