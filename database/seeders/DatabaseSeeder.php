<?php

namespace Database\Seeders;

use App\Models\DustMeasurement;
use App\Models\LuxMeasurement;
use App\Models\NoiseMeasurement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DustMeasurement::factory()->count(50)->create();
        LuxMeasurement::factory()->count(50)->create();
        NoiseMeasurement::factory()->count(50)->create();
    }
}
