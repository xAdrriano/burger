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
        Schema::create('burgers', function (Blueprint $table) {
            $table->id();
            $table->string('Imię');
            $table->string('Nazwisko');
            $table->string('Rodzaj');
            $table->string('Rozmiar');
            $table->string('Bułka');
            $table->json('dodatki');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('burger');
    }
};
