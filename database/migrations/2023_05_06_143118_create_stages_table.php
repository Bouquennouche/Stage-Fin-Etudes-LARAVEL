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
        Schema::create('stages', function (Blueprint $table) {
            $table->id();

            $table->binary('convention')->nullable();
            $table->binary('rapport')->nullable();

            $table->date("dateDebut");
            $table->date("dateFin");
            $table->string("sujet");
            $table->string("note")->nullable();
            $table->unsignedBigInteger('stagiare_id');
            $table->unsignedBigInteger('domaine_id');
            $table->unsignedBigInteger('etablissement_id');
            $table->unsignedBigInteger('encadrant_id');
            //definir les cles etr
            $table->foreign('stagiare_id')->references('id')->on('stagiaires')->onDelete('cascade');
            $table->foreign('domaine_id')->references('id')->on('domaines');
            $table->foreign('encadrant_id')->references('id')->on('encdrants');
            $table->foreign('etablissement_id')->references('id')->on('etablissements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
    }
};
