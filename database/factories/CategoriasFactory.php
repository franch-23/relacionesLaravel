<?php

namespace Database\Factories;

use App\Models\categorias;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class categoriasFactory extends Factory
{
    protected $model = categorias::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),

        ];
    }
}
