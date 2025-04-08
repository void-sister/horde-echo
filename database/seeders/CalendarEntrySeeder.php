<?php

namespace Database\Seeders;

use App\Models\CalendarEntry;
use Illuminate\Database\Seeder;

class CalendarEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CalendarEntry::factory()->count(20)->create();
    }
}
