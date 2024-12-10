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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('numero_serie');
            $table->string('modele');
            $table->string('numero_inventaire');
            $table->unsignedBigInteger('utilisateur_id');
            $table->unsignedBigInteger('label_id');
            $table->unsignedBigInteger('reference_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('fabricant_id');

            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs');
            $table->foreign('label_id')->references('id')->on('labels');
            $table->foreign('reference_id')->references('id')->on('references');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('fabricant_id')->references('id')->on('fabricants');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};