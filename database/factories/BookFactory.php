<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title=$this->faker->sentence(),
            'slug'=>Str::slug($title),
            'excerpt' => $this->faker->paragraph(2),
            'body' => $this->faker->paragraph(5),
        ];
    }
}
