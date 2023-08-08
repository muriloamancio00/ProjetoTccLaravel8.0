<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        //for ($i = 1; $i < 10; $i++) {
            DB::table('administradores')->insert([
                'id' => 1,
                'apelido' => $faker->name,
                //'email' => $faker->unique()->safeEmail,
                //'senha' => bcrypt('password'), // Defina a senha desejada ou utilize o Hash::make() para criar uma senha criptografada
                'telefone' => $faker->phoneNumber,
                //'role_id' => 1, // Defina o ID da role desejada para o feirante
                //'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        //}
    }
}
