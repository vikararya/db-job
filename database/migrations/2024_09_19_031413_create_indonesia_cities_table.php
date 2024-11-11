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
        Schema::create('indonesia_cities', function (Blueprint $table) {
            $table->id();
            $table->char('code');
            $table->foreignId('province_code')->constrained('indonesia_provincies')->onDelete('cascade');
            $table->string('name');
            $table->text('meta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indonesia_cities');
    }
};
