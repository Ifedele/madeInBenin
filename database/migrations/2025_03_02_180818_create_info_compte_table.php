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
        Schema::create('info_compte', function (Blueprint $table) {
            $table->id();
            $table->string('numero_carte')->nullable();
            $table->date('exp_date')->nullable();
            $table->integer('cvv')->nullable();
            $table->string('num_momo')->nullable(); // Numéro Mobile Money
            $table->foreignId('id_acheteur')->unique()->constrained('acheteurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_compte');
    }
};
