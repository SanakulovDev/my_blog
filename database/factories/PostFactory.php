<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => json_encode([
                'uz' => $this->faker->word(),
                'ru' => $this->faker->word(),
                'en' => $this->faker->word(),
            ]), // Fake title yaratish
            'body' => json_encode([
                'content' =>[
                    'uz' => $this->faker->paragraph(5, true),
                    'ru' => $this->faker->paragraph(5, true),
                    'en' => $this->faker->paragraph(5, true),
                ],
                'image' => [
                    'url' => $this->faker->imageUrl(640, 480, 'animals',true),
                    'alt' => [
                        'uz' => $this->faker->word(),
                        'ru' => $this->faker->word(),
                        'en' => $this->faker->word(),
                    ]
                ],

            ]),
            
            'user_id' => \App\Models\User::factory(), // Random user ID
            'category_id' => \App\Models\Category::factory(), // Random category ID
            'description' => json_encode([
                'uz' => $this->faker->paragraph(5, true),
                'ru' => $this->faker->paragraph(5, true),
                'en' => $this->faker->paragraph(5, true),
            ]),
            'published_at' => now(), // Hozirgi vaqtni saqlash
            'is_featured' => $this->faker->boolean(50), // Tasodifiy featured flag (50% true)
        ];
    }
}
