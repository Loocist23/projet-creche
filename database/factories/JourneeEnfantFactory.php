<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JourneeEnfant>
 */
class JourneeEnfantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'commentaire' => $this->faker->text(),
            'enfant_id' => $this->faker->numberBetween(1, 10),
            'personnel_id' => $this->faker->numberBetween(1, 10),
            'menu_id' => $this->faker->numberBetween(1, 10),
            'planning_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
