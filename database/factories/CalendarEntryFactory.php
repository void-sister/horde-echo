<?php

namespace Database\Factories;

use App\Enums\CalendarEntryType;
use App\Models\CalendarEntry;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CalendarEntry>
 */
class CalendarEntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => Project::inRandomOrder()->first()?->id,
            'title' => fake()->sentence,
            'type' => fake()->randomElement(CalendarEntryType::cases())->value,
            'start_date' => $this->faker->dateTimeBetween('-1 month', '+1 month')->format('Y-m-d'),
            'end_date' => $this->faker->dateTimeBetween('+2 days', '+2 months')->format('Y-m-d'),
        ];
    }
}
