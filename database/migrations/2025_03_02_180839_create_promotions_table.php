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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('type_reduction');
            $table->text('description')->nullable();
            $table->string('valeur'); // Peut être un pourcentage ou une valeur fixe
            $table->string('seuil')->nullable(); // Minimum d'achat pour activer la promo
            $table->string('produit_cible')->nullable(); // Produit spécifique concerné
            $table->string('code_promo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
