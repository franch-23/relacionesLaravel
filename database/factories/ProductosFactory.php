<?php

namespace Database\Factories;


use App\Models\clientes;
use App\Models\productos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductosFactory extends Factory
{
    protected $model = productos::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "cliente_id"=>clientes::factory(),
            'nombre' => $this->faker->name(),
            'precio' => $this->faker->numberBetween(),
            'pais_origen' => $this->faker->name,
            'obeservaciones' => $this->faker->name,
            'secciones' => $this->faker->name,

        ];
    }
}
