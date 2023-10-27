<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enfant>
 */
class EnfantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'birthdate' => $this->faker->date(),
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'link_profil_picture' => $this->faker->imageUrl(),
            'owner_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
