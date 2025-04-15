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
        Schema::create('details_commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');
            $table->decimal('prix_unitaire', 10, 2);
            $table->decimal('montant', 10, 2);
            $table->foreignId('id_produit')->constrained('produits')->onDelete('cascade');
            $table->foreignId('id_commande')->constrained('commandes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_commandes');
    }
};
