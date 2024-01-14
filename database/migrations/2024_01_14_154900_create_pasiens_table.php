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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('kodepasien')->nullable();
            $table->string('nama');
            $table->string('nik');
            $table->date('tgl_lahir');
            $table->string('tmp_lahir');
            $table->string('kelamin');
            $table->string('nohp');
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('agama');
            $table->string('status')->nullable();
            $table->string('gol');
            $table->text('alamat');
            $table->string('layanan');
            $table->text('keluhan');
            $table->string('dokter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
