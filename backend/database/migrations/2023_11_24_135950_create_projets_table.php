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
        Schema::create('projet', function (Blueprint $table) {
            $table->id();
            $table->string('code_projet', 11);
            $table->string('nom_projet', 50);
            $table->integer('duree');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->enum('etat', ['fini', 'encours', 'non_execute']);
            $table->text('objectif')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projet');
    }
};
