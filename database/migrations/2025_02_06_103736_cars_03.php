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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('Producent');
            $table->string('Model');
            $table->string('Kolor');
            $table->date('Data_produkcji')->nullable();
            $table->string('Przebieg');
            $table->string('Pojemnosc_silnika');
            $table->string('VIN');
            $table->string('Cena');
            $table->string('Stan');
            $table->string('Opis_stanu');
            $table->string('Typ');
            $table->string('Link_do_zdjec');
            $table->date('Data_utworzenia')->nullable();
            $table->date('Termin')->nullable();
            $table->integer('Pozostalo');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
?>