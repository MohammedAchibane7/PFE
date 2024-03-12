<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demande_emploi', function (Blueprint $table) {
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->text('cv');
            $table->text('lettre_motivation');
            // Ajoutez d'autres champs si nécessaire
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demande_emploi', function (Blueprint $table) {
            $table->dropColumn('nom');
            $table->dropColumn('prenom');
            $table->dropColumn('email');
            $table->dropColumn('cv');
            $table->dropColumn('lettre_motivation');
            // Supprimez d'autres champs si nécessaire
        });
    }
};
