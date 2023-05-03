<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;
use App\Models\Game;
use App\Models\Location;
use App\Models\Platform;
use App\Models\Romsize;
use Illuminate\Support\Facades\DB;

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
        $this->call(UserSeeder::class);
        // DB::table('languages')->insert([
        //     'id' => 1,
        //     'language' => 'Sin idioma']);
        // el idioma 18 es el ultimo que debe haber, previos 17
        Language::factory(50)->create();
        Location::factory(50)->create();
        Platform::factory(50)->create();
        Romsize::factory(50)->create();
        Game::factory(50)->create();
    }
}
