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
            $table->string('name'); // Nama mobil, e.g., "Toyota Avanza"
            $table->string('brand'); // Merek, e.g., "Toyota"
            $table->integer('year'); // Tahun pembuatan
            $table->bigInteger('price'); // Harga
            $table->text('description'); // Deskripsi lengkap
            $table->string('transmission'); // e.g., "Automatic", "Manual"
            $table->string('fuel_type'); // e.g., "Bensin", "Diesel"
            $table->string('engine_capacity'); // e.g., "1500cc"
            $table->string('image')->nullable(); // Path untuk gambar mobil
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
