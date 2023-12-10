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
        Schema::create('nilai_alternative_kriteria', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alternative_id')->constrained('alternative')->cascadeOnDelete()->cascadeOnUpdate();//membuat kolom foreign key ke kolom id dari table packages
            $table->foreignId('criteria_id')->constrained('criteria')->cascadeOnDelete()->cascadeOnUpdate();//membuat kolom foreign key ke kolom id dari table packages
            $table->integer('grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_alternative_kriteria');
    }
};
