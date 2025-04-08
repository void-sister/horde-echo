<?php

namespace Database\Seeders;

use App\Models\PortfolioEntity;
use Illuminate\Database\Seeder;

class PortfolioEntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PortfolioEntity::factory()->count(10)->create();
    }
}
