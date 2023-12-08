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
        Schema::create('opening_times', function (Blueprint $table) {
            $table->id();
            $table->string('day'); // Kolom untuk menyimpan hari (e.g., Monday, Tuesday, dll.)
            $table->time('hour'); // Kolom untuk menyimpan jam buka/tutup (format: HH:MM:SS)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('opening_times');
    }
};
