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
        Schema::create('employer_social_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->constrained('employers')->onDelete('cascade');
            $table->string('website');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('youtube');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer_social_media');
    }
};
