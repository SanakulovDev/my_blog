<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => json_encode([
                'uz' => $this->faker->word(),
                'ru' => $this->faker->word(),
                'en' => $this->faker->word(),
            ]), 
            // 'created_by' => \App\Models\User::inRandomOrder()->value('id'), // Random user ID
            'description' => json_encode([
                'uz' => $this->faker->sentence(),
                'ru' => $this->faker->sentence(),
                'en' => $this->faker->sentence(),
            ]), // Fake description yaratish
        ];
    }
}
