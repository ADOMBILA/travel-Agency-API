<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(3); // e.g. "Safari Adventure Tour"

        return [
          'id' => (string) Str::uuid(),
            'is_public' => $this->faker->boolean(70), // 70% chance public
            'slug' => Str::slug($name), // your sluggable package will also handle it
            'name' => $name,
            'description' => $this->faker->paragraph(5),
            'number_of_days' => $this->faker->numberBetween(2, 14),
        ];
    }
}
