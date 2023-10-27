<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(),
            'content' => $this->faker->text(),
            'link_picture' => $this->faker->imageUrl(),
            'link_video' => $this->faker->imageUrl(),
            'date' => $this->faker->date(),
            'personnel_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
