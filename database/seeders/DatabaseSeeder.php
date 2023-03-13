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
        $this->call(RoleSeeder::class);
        Language::factory(50)->create();
        Location::factory(50)->create();
        Platform::factory(50)->create();
        Romsize::factory(50)->create();
        Game::factory(50)->create();
    }
}
