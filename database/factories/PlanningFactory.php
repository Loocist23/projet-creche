<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planning>
 */
class PlanningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            '8H-10H' => $this->faker->text(),
            '10H-12H' => $this->faker->text(),
            '12H-14H' => $this->faker->text(),
            '14H-16H' => $this->faker->text(),
            '16H-18H' => $this->faker->text(),
        ];
    }
}
