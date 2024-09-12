<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Developer::create(['name' => 'Electronic Arts']);
        Developer::create(['name' => 'Activision']);
        Developer::create(['name' => 'Ubisoft']);
        Developer::create(['name' => 'Rockstar Games']);
        Developer::create(['name' => 'Bethesda']);
        Developer::create(['name' => 'Square Enix']);
        Developer::create(['name' => 'Capcom']);
        Developer::create(['name' => 'Bandai Namco']);
        Developer::create(['name' => 'Valve']);
        Developer::create(['name' => 'Naughty Dog']);
    }
}
