<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'category' => $this->faker->word,
            'content' => $this->faker->paragraph,
            'is_published' => $this->faker->boolean,
            'slug' => $this->faker->slug,
            'published_at' => now(),
        ];
    }
}
