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
        Schema::create('formulaires', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('campagne_id')->constrained();
            $table->string('nomCampagne');
            $table->boolean('actif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulaires');
    }
};