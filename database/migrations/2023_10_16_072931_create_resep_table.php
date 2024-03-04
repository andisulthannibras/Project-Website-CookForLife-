<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resep', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nama');
            $table->string('pencipta');
            $table->longText('deskripsi');
            $table->string('rating');            
            $table->string('last_update');
            $table->string('durasi');
            $table->string('porsi');
            $table->string('tingkat_kesulitan');
            $table->longText('catatan');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');            
            $table->string('image_4');
            $table->timestamps();       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep');
    }
};