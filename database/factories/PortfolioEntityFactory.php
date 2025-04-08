<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\PortfolioEntity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PortfolioEntity>
 */
class PortfolioEntityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'artist' => fake()->name,
            'title' => fake()->sentence,
            'file_id' => File::factory(),
            'position' => fake()->randomNumber(2),
        ];
    }
}
