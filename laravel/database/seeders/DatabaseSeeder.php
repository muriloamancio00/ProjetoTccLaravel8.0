<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    /**
     * Run the database seeds.
     * php artisan make:seeder TipoProdutoSeeder/
     * php artisan make:seeder TipoEventoSeeder
     * php artisan make:seeder ListaProdutoSeeder
     * php artisan make:seeder FeiraSeeder
     * php artisan make:seeder BancaSeeder
     * php artisan make:seeder ProdutoSeeder
     *
     *
     */

        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(FeiranteSeeder::class);
        $this->call(AdministradorSeeder::class);
        $this->call(ResourcesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(TipoProdutoSeeder::class);
        $this->call(TipoEventoSeeder::class);
        $this->call(ListaProdutoSeeder::class);
        $this->call(FeiraSeeder::class);
        $this->call(BancaSeeder::class);
        $this->call(Feiras_BancasSeeder::class);
        $this->call(ProdutoSeeder::class);
        //

    }
}
