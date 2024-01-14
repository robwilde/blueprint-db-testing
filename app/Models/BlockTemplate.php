<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlockTemplate extends Model
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
        'openehr_uid',
        'template_id',
        'sem_ver',
        'name',
        'web_template_data',
        'meta',
        'opt_file_path',
        'parent_id',
        'captured_by',
        'template_key_id',
        'opt_meta',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'web_template_data' => 'array',
        'created_at' => 'timestamp',
        'meta' => 'array',
        'deleted_at' => 'timestamp',
        'opt_meta' => 'array',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Parent::class);
    }

    public function templateKey(): BelongsTo
    {
        return $this->belongsTo(TemplateKey::class);
    }
}
