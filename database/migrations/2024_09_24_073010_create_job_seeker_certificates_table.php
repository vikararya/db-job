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
        Schema::create('job_seeker_certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_seeker_id')->constrained('job_seekers')->onDelete('cascade');
            $table->string('title');
            $table->string('achievement');
            $table->char('year', 4);
            $table->char('month_start', 2);
            $table->char('year_start', 4);
            $table->char('year_end', 4);
            $table->char('month_end', 2);
            $table->boolean('without_active_period')->default(false);
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seeker_certificates');
    }
};
