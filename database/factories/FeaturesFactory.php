<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\features>
 */
class FeaturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        "title"=> $this->faker->title(),
        "excerpt"=> $this->faker->paragraph(),
        "body"=> $this->faker->paragraph(5)
        ];
    }
}
