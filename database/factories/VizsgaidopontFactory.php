<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vizsgaidopont>
 */
class VizsgaidopontFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'targy' => $this->faker->word(),
            'tipus' => $this->faker->randomElement(['erettsegi', 'szakmai']),
            'kezdes' => $this->faker->dateTimeBetween('+1 week', '+2 week')
        ];
    }
}
