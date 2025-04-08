<?php

namespace Database\Factories;

use App\Enums\InvoiceStatus;
use App\Models\Invoice;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /** @var Project $project */
        $project = Project::inRandomOrder()->first();

        return [
            'client_id' => $project?->client_id,
            'project_id' => $project?->id,
            'amount' => fake()->randomFloat(2, 100, 1000),
            'status' => fake()->randomElement(InvoiceStatus::cases())->value,
            'due_date' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d H:i:s'),
        ];
    }
}
