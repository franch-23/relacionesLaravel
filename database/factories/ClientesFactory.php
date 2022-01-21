<?php

namespace Database\Factories;

use App\Models\clientes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class clientesFactory extends Factory
{
    protected $model = clientes::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ];
    }

    /*public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });

}*/
}
