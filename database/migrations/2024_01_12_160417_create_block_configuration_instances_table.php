<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('block_configuration_instances', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('block_configuration_id')->constrained();
            $table->string('version', 255);
            $table->timestampTz('published_at')->nullable();
            $table->timestampTz('released_at')->nullable();
            $table->json('layout');
            $table->json('layout_translations');
            $table->json('template_configurations');
            $table->json('meta');
            $table->json('notes')->nullable();
            $table->timestampTz('created_at');
            $table->foreignUuid('generated_template_id')->nullable()->constrained('block_templates')->comment('the generated template based on configuration');
            $table->foreignUuid('base_template_id')->constrained('block_templates')->comment('the base_template or uploaded OPT this was created from');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('block_configuration_instances');
    }
};
