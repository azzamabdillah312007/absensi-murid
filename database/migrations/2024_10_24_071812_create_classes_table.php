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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();   
            $table->string('nama_kelas');
            $table->string('tingkatan');
            $table->string('mapel');
            $table->foreignId('teacher_id')->consrained('teachers')->onDelete('cascade');
            $table->string('deskripsi');
            $table->integer('kode_kelas');
            $table->string('ruangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
