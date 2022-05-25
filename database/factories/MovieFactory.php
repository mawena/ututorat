<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> '1',
            'category_id' => random_int(1,6),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'path' => 'videos/1.mp4',
            'created_at' => $this->faker->datetime
        ];
    }
}
