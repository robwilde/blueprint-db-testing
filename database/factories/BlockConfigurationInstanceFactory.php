<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BlockConfiguration;
use App\Models\BlockConfigurationInstance;
use App\Models\BlockTemplate;

class BlockConfigurationInstanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlockConfigurationInstance::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'block_configuration_id' => BlockConfiguration::factory(),
            'version' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'published_at' => $this->faker->dateTime(),
            'released_at' => $this->faker->dateTime(),
            'layout' => '{}',
            'layout_translations' => '{}',
            'template_configurations' => '{}',
            'meta' => '{}',
            'notes' => '{}',
            'created_at' => $this->faker->dateTime(),
            'generated_template_id' => BlockTemplate::factory(),
            'base_template_id' => BlockTemplate::factory(),
        ];
    }
}
