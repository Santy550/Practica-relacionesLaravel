<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Cliente::class;

    public function definition()
    {
        return [
            "nombre"=>$this->faker->name(25),
            "apellidos"=>$this->faker->name(50),
            'email' => $this->faker->unique()->safeEmail(),
            'remember_token' => "",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ];
    }
}
