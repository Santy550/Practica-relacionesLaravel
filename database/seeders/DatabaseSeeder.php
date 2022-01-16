<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\User;
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
        $this->call([
            ClienteSeeder::class,
            ArticuloSeeder::class,
            ProveedorSeeder::class,
        ]);
    }
}
