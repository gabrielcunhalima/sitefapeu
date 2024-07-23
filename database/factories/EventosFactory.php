<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eventos>
 */
class EventosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'IDProjeto' => fake()->randomNumber(),
            'dataInicioEvento' => fake()->date(),
            'dataFinalEvento' => fake()->date(),
            'Titulo' => fake()->word(),
            'Local' => fake()->word(),
            'Descricao' => fake()->text(),
        ];
    }
}
