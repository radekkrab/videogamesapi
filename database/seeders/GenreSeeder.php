<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['name' => 'Action']);
        Genre::create(['name' => 'Adventure']);
        Genre::create(['name' => 'Role-Playing']);
        Genre::create(['name' => 'Simulation']);
        Genre::create(['name' => 'Strategy']);
        Genre::create(['name' => 'Sports']);
        Genre::create(['name' => 'Puzzle']);
        Genre::create(['name' => 'Horror']);
        Genre::create(['name' => 'Racing']);
        Genre::create(['name' => 'Platformer']);
    }
}
