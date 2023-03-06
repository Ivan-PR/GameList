<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->imageUrl(),
            'platform' => $this->faker->numberBetween(1, 10),
            'publisher' => $this->faker->company(),
            'location' => $this->faker->numberBetween(1, 10),
            'language' => $this->faker->numberBetween(1, 10),
            'sourcerom' => $this->faker->countryISOAlpha3(),
            'romsize' => $this->faker->numberBetween(1, 10),
            'savetype' => $this->faker->emoji(),
        ];
    }
}
?>