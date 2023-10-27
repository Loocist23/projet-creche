<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'birthdate' => $this->faker->date(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'zip_code' => $this->faker->postcode(),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
