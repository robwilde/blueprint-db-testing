<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BlockConfiguration;
use App\Models\TemplateKey;

class BlockConfigurationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlockConfiguration::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'type' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'meta' => '{}',
            'created_at' => $this->faker->dateTime(),
            'template_key_id' => TemplateKey::factory(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
