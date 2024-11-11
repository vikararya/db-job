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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('logo');
            $table->text('description');
            $table->string('slogan');
            $table->foreignId('province_id')->constrained('indonesia_provincies')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('indonesia_cities')->onDelete('cascade');
            $table->string('address');
            $table->foreignId('number_of_employee_id')->constrained('number_of_employees')->onDelete('cascade');
            $table->string('npwp');
            $table->string('nib');
            $table->boolean('status')->default(false);
            $table->foreignId('industry_id')->constrained('industries')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
