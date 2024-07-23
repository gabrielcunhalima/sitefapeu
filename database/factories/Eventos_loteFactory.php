<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Eventos;
use App\Models\Formapagamento;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eventos_lote>
 */
class Eventos_loteFactory extends Factory
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
            'inicioLote' => fake()->date(),
            'FimLote' => fake()->date(),
            'id_formapagamento' => Formapagamento::pluck('id')->random(),
            'valor' => fake()->randomNumber(2),
        ];
    }
}
