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
            $table->id();
            $table->string('nama');
            $table->integer('nis');
            $table->date('tanggal_lahir'); // Sesuaikan tipe date
            $table->string('alamat');
            $table->string('no_hp'); // Ubah dari integer ke string
            $table->string('email');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->foreignId('classes_id');
            $table->string('orang_tua');
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
