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
        // \App\Models\User::factory(10)->create();
        \App\Models\Cliente::factory(25)->create();
        \App\Models\Producto::factory(1000)->create();
        \App\Models\Pedido::factory(100)->create();
    }
}
