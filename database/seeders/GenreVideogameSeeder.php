<?php

namespace Database\Seeders;

use App\Models\Videogame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreVideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Videogame::all()->each(function ($videogame) {
            $genres = \App\Models\Genre::inRandomOrder()->take(rand(1, 3))->pluck('id')->toArray();
            $videogame->genre()->sync($genres);
        });
    }
}
