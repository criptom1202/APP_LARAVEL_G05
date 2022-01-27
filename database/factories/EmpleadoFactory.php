<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cargo_id'=>rand(1, 5),
            'nombre' => $this->faker->name(),
            'apellidos'=> $this->faker->lastName(),
            'dni' => rand(10000000, 99999999),
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'fecha_cont' => $this->faker->date('Y-m-d'),
            'salario' => $this->faker->randomFloat(2, 1000, 2000)
        ];
    }
}
