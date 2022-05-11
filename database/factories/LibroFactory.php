<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->title(),
            'autor' =>  $this->faker->lastName(),
            'editorial' =>  $this->faker->text(10),
            'imagen' => $this->faker->imageUrl(),
            'categoria' =>  $this->faker->text(10),
        ];
    }
}
