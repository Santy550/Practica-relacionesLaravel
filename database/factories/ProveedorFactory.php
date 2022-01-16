<?php

namespace Database\Factories;

use App\Models\Articulo;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Proveedor::class;

    public function definition()
    {
        return [
            "articulos_id"=> Articulo::factory(),
            "nombre_proveedor"=> $this->faker->text(50),
            "productos"=> $this->faker->numberBetween(10),
            "cantidad_productos"=> $this->faker->numberBetween(20),
            "precio_total"=> $this->faker->numberBetween(40),
        ];
    }
}
