<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'title' => $this->faker->sentence(),
        'genres' => $this->faker->word(),
        'artists' => $this->faker->name(),
        'thumb' => $this->faker->imageUrl(),
        'audio' => $this->faker->url(),
        'created_at' => $this->faker->dateTime(),
    ];
}

}
