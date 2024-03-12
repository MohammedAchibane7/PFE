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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 150);
            $table->enum('type', ['Full Time', 'Part Time', 'Freelance']);
            $table->string('departement', 40);
            $table->string('description', 200);
            $table->string('salaire');
            $table->unsignedBigInteger('recruteur_id');
            $table->foreign('recruteur_id')->references('id')->on('recruteurs');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
