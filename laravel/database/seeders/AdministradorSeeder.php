<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

        DB::table('administradors')->insert([
            'name' => 'Murilo Amancio da Silva',
            'email' => 'muriloamancio0@gmail.com',
            'password' => Hash::make('11111111'),
            'status' => 1,
            'role_id' => 1,
        ]);

        for ($i = 1; $i < 10; $i++) {
            DB::table('administradors')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('11111111'),
                'status' => 1,
                'role_id' => 1,
            ]);
        }

    }
}
