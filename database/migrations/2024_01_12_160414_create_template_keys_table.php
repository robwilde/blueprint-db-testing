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
        Schema::create('template_keys', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('key')->comment('first part of the template_id in OPT file. Reflects the base template used to create block configuration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_keys');
    }
};
