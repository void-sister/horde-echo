<?php

namespace Database\Factories;

use App\Enums\ProjectStatus;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::inRandomOrder()->first()?->id,
            'booking_id' => null,
            'title' => fake()->sentence,
            'description' => fake()->paragraph,
            'notes' => fake()->text,
            'start_date' => null,
            'end_date' => null,
            'release_date' => null,
            'status' => ProjectStatus::Scheduled->value,
        ];
    }
}
