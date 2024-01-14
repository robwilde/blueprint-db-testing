<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BlockTemplate;
use App\Models\Parent;
use App\Models\TemplateKey;

class BlockTemplateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlockTemplate::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'openehr_uid' => $this->faker->uuid(),
            'template_id' => $this->faker->word(),
            'sem_ver' => $this->faker->word(),
            'name' => $this->faker->name(),
            'web_template_data' => '{}',
            'created_at' => $this->faker->dateTime(),
            'meta' => '{}',
            'opt_file_path' => $this->faker->text(),
            'parent_id' => Parent::factory(),
            'captured_by' => $this->faker->word(),
            'deleted_at' => $this->faker->dateTime(),
            'template_key_id' => TemplateKey::factory(),
            'opt_meta' => '{}',
        ];
    }
}
