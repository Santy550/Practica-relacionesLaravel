<?php

namespace Database\Factories;

use App\Models\Articulo;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Articulo::class;

    public function definition()
    {
        return [
            "clientes_id"=> Cliente::factory(),
            "nombre_articulo"=> $this->faker->text(50),
            "precio"=> $this->faker->numberBetween(20),
            "pais_origen"=> $this->faker->text(50),
            "observaciones"=> $this->faker->text(50),
            "seccion"=> $this->faker->text(50),
        ];
    }
}
