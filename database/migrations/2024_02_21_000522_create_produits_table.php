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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->longText('description');
            $table->string('montant');
            $table->string('quantite');
            $table->foreignId('categories_id')->constrained()->onDelete('cascade');

            //photo
            $table->string('filename')->nullable();
            $table->string('url')->nullable();
            $table->string('path')->nullable();
            $table->string('thumb_url')->nullable();
            $table->string('thumb_path')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
