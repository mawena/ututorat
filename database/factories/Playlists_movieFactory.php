<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Playlists_movie>
 */
class Playlists_movieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'playlist_id' => random_int(1,20),
            'movie_id' => random_int(1,20),
            'created_at' => $this->faker->dateTime()
        ];
    }
}
