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
        Schema::create('himpunans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_fo_id');
            $table->string('nama_himpunan');
            $table->string('kode_himpunan');
            $table->date('tanggal_aktivasi');
            $table->string('provinsi')->default('Jawa Barat');
            $table->string('kokab');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->integer('rw');
            $table->integer('rt');
            $table->text('alamat');
            $table->string('mitra');
            $table->string('email_mitra');
            $table->string('no_hp_mitra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('himpunans');
    }
};