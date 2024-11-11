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
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            // start uji coba menggunakan text 
            $table->string('province')->nullable(); // Province (Step 1)
            $table->string('city')->nullable();     // City (Step 1)
            $table->string('address')->nullable();  // Address (Step 1)

            $table->json('looking_for_jobs')->nullable(); // Job Preferences (Step 2)
            $table->enum('job_type', ['magang', 'fulltime', 'parttime'])->nullable(); // Job Type (Step 2)
            $table->boolean('willing_remote')->default(false); // Willing to work remotely (Step 2)
            // end uji coba menggunakan text
            $table->string('phone')->unique();
            $table->string('resume')->nullable();
            $table->string('portofolio_link')->nullable();
            $table->string('portofolio')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('description')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seekers');
    }
};
