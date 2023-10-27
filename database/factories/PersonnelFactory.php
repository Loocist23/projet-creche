<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personnel>
 */
class PersonnelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'date_naissance' => $this->faker->date(),
            'adresse' => $this->faker->text(255),
            'code_postal' => $this->faker->text(255),
            'ville' => $this->faker->text(255),
            'telephone' => $this->faker->text(255),
            'email' => $this->faker->text(255),
            'poste' => $this->faker->text(255),
            'user_id' => $this->faker->numberBetween(10, 20),
        ];
    }
}
