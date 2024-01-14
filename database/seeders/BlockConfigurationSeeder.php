<?php

namespace Database\Seeders;

use App\Models\BlockConfiguration;
use Illuminate\Database\Seeder;

class BlockConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlockConfiguration::factory()->count(5)->create();
    }
}
