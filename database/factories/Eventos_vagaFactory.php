<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Eventos;
use App\Models\Modalidade;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eventos_vaga>
 */
class Eventos_vagaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [            
            'id_evento' => Eventos::pluck('id')->random(),
            'id_modalidade' => Modalidade::pluck('id')->random(),
            'quantidade' => fake()->numberBetween(50,1000),
        ];
    }
}
