<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FeiranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('feirantes')->insert([
            'name' => 'Helena Karol Pinheiro Maia',
            'email' => 'helenamaia@hotmail.com',
            'password' => Hash::make('11111111'),
            'status' => 1,
            'role_id' => 2,
        ]);

        for ($i = 1; $i <= 10; $i++) {
            DB::table('feirantes')->insert([
                'name' => Str::random(15),
                'email'=>Str::random(15),
                'password' =>Hash::make('11111111'),
                'status' => 1,
                'role_id' => 2,
            ]);
        }

    }
}
