<?php

namespace Database\Seeders;

use App\Models\BlockConfigurationInstance;
use Illuminate\Database\Seeder;

class BlockConfigurationInstanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlockConfigurationInstance::factory()->count(5)->create();
    }
}
