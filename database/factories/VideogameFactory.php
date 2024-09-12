<?php

namespace Database\Factories;

use App\Models\Developer;
use App\Models\Genre;
use App\Models\Videogame;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videogame>
 */
class VideogameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'developer_id' => Developer::inRandomOrder()->first()->id,
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (Videogame $videogame) {
            $genres = Genre::inRandomOrder()->take(rand(1, 3))->pluck('id')->toArray();
            $videogame->genre()->sync($genres);
        });
    }
}
