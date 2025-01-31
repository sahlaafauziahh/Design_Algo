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
        Schema::create('panahans', function (Blueprint $table) {
            $table->id();
            $table->string('level'); // Pemula, Menengah, Lanjutan
            $table->integer('technical_skill_score');
            $table->integer('mental_focus_score');
            $table->integer('strategy_tactics_score');
            $table->integer('competitive_performance_score');
            $table->integer('total_score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panahans');
    }
};
