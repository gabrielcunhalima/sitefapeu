<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Eventos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Eventos_configFactory extends Factory
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
            'PagamentoBoleto' => $this->faker->numberBetween(0,1),
            'PagamentoCartao' => $this->faker->numberBetween(0,1),
            'PagamentoPIX'  => $this->faker->numberBetween(0,1),
            'QuantidadeParcelas' => $this->faker->numberBetween(0,5),
            'VencimentoPagamento' => fake()->date(),
        ];
    }
}
