<?php

namespace Database\Seeders;

use App\Models\Tour;
use App\Models\Travel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
                Tour::factory()->count(20)->create();

    }
}
