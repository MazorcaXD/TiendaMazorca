<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'    => $this->faker->word(),
            'cliente'     => Cliente::all()->random()->id,
            'producto' => Producto::all()->random()->id,
            'precio'  => $this->faker->numberBetween($min=5,$max=500),
        ];
    }
}
