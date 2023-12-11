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
        Schema::create('zeneszamok', function (Blueprint $table) {
            $table->id('zsz_id');
            //$table->integer('e_id');
            $table->string('cim',255);
            $table->smallInteger('hossz'); 
            $table->smallInteger('kiadasi_ev'); 

            $table->foreignId('e_id')->references('e_id')->on('zeneszek')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zeneszamok');
    }
};
