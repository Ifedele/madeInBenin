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
        Schema::create('commentaire_produits', function (Blueprint $table) {
            $table->id();
            $table->string('note'); // Note sous forme de nombre ou texte
            $table->text('commentaire');
            $table->date('date_com');
            $table->foreignId('id_detail_commande')->constrained('details_commandes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaire_produits');
    }
};
