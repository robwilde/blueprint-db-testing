<?php

namespace Database\Seeders;

use App\Models\BlockTemplate;
use Illuminate\Database\Seeder;

class BlockTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlockTemplate::factory()->count(5)->create();
    }
}
