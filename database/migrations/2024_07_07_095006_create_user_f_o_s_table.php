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
        Schema::create('user_f_o_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama');
            $table->string('nik')->unique();
            $table->string('foto_ktp');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('provinsi')->default('Jawa Barat');
            $table->string('kokab');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->integer('rw');
            $table->integer('rt');
            $table->text('alamat');
            $table->string('sertifikasi');
            $table->string('coverage_area');
            $table->integer('jumlah_himpunan')->default(0);
            $table->integer('jumlah_anggota')->default(0); 
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_f_o_s');
    }
};