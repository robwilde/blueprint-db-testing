<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlockConfigurationInstance extends Model
{
    use HasFactory, HasUuids;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'block_configuration_id',
        'version',
        'published_at',
        'released_at',
        'layout',
        'layout_translations',
        'template_configurations',
        'meta',
        'notes',
        'generated_template_id',
        'base_template_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'published_at' => 'timestamp',
        'released_at' => 'timestamp',
        'layout' => 'array',
        'layout_translations' => 'array',
        'template_configurations' => 'array',
        'meta' => 'array',
        'notes' => 'array',
        'created_at' => 'timestamp',
    ];

    public function blockConfiguration(): BelongsTo
    {
        return $this->belongsTo(BlockConfiguration::class);
    }

    public function generatedTemplate(): BelongsTo
    {
        return $this->belongsTo(BlockTemplate::class);
    }

    public function baseTemplate(): BelongsTo
    {
        return $this->belongsTo(BlockTemplate::class);
    }
}
