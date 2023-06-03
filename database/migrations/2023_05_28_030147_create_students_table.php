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
        Schema::create('students', function (Blueprint $table) {
            $table->string('nim', 25)->primary();
            $table->string('nama', 150);
            $table->integer('umur');
            $table->string('jenis_kelamin', 50);
            $table->string('alamat', 255);
            $table->string('kota', 100);
            $table->string('jurusan', 50);
            $table->string('fakultas', 50);
            $table->string('kelas', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
