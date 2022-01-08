<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'    => $this->faker->firstname(),
            'apellidos' => $this->faker->lastname(),
            'direccion' => $this->faker->streetAddress(),
            'email'     => $this->faker->email(),
            'f_nacimiento' => $this->faker->date(),
            'telefono'  => $this->faker->phoneNumber(),
        ];
    }
}
