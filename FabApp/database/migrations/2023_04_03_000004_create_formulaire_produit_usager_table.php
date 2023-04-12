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
        Schema::create('formulaire_produit_usagers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('formulaire_produit_id')->constrained();
            $table->foreignId('usager_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulaire_produit_usagers');
    }
};
