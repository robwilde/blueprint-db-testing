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

        Schema::create('block_templates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('openehr_uid');
            $table->string('template_id');
            $table->string('sem_ver');
            $table->string('name')->comment('relates to concept in OPT and must be edited to human readable format');
            $table->json('web_template_data');
            $table->timestampTz('created_at');
            $table->json('meta');
            $table->text('opt_file_path');
            $table->uuid('parent_id')->nullable();
            $table->string('captured_by')->comment('patient vs clinician');
            $table->timestampTz('deleted_at')->nullable();
            $table->foreignUuid('template_key_id')->constrained();
            $table->json('opt_meta');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('block_templates');
    }
};
