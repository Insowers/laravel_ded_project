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
        Schema::create('monsters_weapons', function (Blueprint $table) {
            $table->integer('id_monster')->unsigned();
            $table->integer('id_weapon')->unsigned();
            $table->foreign('id_monster')->references('id_monster')->on('monsters')->onDelete('cascade');
            $table->foreign('id_weapon')->references('id_weapon')->on('weapons')->onDelete('cascade');
            $table->primary(['id_monster', 'id_weapon']);
            $table->integer('quantities')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monsters_weapons');
    }
};
