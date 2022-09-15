<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i = 1; $i <= 2; $i++) {
            for ($j = 1; $j <= 36; $j++) {

                DB::table('permissions')->insert([
                    'resource_id' => $j,
                    'role_id' => $i,
                    'permissao' => 1,
                ]);
            }
        }


    }
}
