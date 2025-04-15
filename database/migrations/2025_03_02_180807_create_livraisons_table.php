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
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->date('date_expedition');
            $table->date('date_livraison');
            $table->string('mode_livraison');
            $table->enum('statut_livraison', ['en cours', 'effectuee'])->default('en cours');
            $table->string('adresse_livraison');
            $table->foreignId('id_commande')->unique()->constrained('commandes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livraisons');
    }
};
