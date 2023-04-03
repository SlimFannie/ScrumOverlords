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
        Schema::create('produit_tailles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produit_id')->constrained();
            $table->foreignId('taille_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        #Schema::dropIfExists('personal_access_tokens');
    }
};
