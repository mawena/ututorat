<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => '1',
            'content' => $this->faker->sentence(),
            'commentable_id' => random_int(1,18),
            'commentable_type' => 'App\Models\Movie',
            'created_at' => $this->faker->dateTime()
        ];
    }
}
