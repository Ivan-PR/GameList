<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;
use App\Models\Game;
use App\Models\Location;
use App\Models\Platform;
use App\Models\Romsize;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Language::factory(10)->create();
        Game::factory(10)->create();
        Location::factory(10)->create();
        Platform::factory(10)->create();
        Romsize::factory(10)->create();

    }
}
