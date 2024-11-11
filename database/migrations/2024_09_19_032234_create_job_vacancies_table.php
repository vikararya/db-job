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
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('profession_id')->constrained('professions')->onDelete('cascade');
            $table->foreignId('profession_detail_id')->constrained('profession_details')->onDelete('cascade');
            $table->foreignId('job_type_id')->constrained('job_types')->onDelete('cascade');
            $table->foreignId('work_system_id')->constrained('work_systems')->onDelete('cascade');
            $table->foreignId('province_id')->constrained('indonesia_provincies')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('indonesia_cities')->onDelete('cascade');
            $table->double('salary_min');
            $table->double('salary_max');
            $table->integer('show_salary');
            $table->integer('salary_bonus');
            $table->double('salary_bonus_min');
            $table->double('salary_bonus_max');
            $table->bigInteger('salary_bonus_period');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->integer('no_age_limit');
            $table->double('age_min');
            $table->double('age_max');
            $table->foreignId('education_id')->constrained('educations')->onDelete('cascade');
            $table->foreignId('work_experience_requirement_id')->constrained('work_experiences')->onDelete('cascade');
            $table->enum('status', ['Active', 'Non-active', 'Draft', 'Review'])->default('Active');
            $table->string('process_interview');
            $table->foreignId('employer_id')->constrained('employers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');
    }
};
