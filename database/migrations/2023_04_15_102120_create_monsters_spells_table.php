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
        Schema::create('monsters_spells', function (Blueprint $table) {
            $table->integer('id_monster')->unsigned();
            $table->integer('id_spell')->unsigned();  
            $table->foreign('id_monster')->references('id_monster')->on('monsters');
            $table->foreign('id_spell')->references('id_spell')->on('spells');
            $table->primary(['id_monster', 'id_spell']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monsters_spells');
    }
};
