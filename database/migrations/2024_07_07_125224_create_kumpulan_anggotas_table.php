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
        Schema::create('kumpulan_anggotas', function (Blueprint $table) {
            $table->integer('kumpulan_id');
            $table->integer('user_member_id');
            $table->string('absensi');
            $table->bigInteger('pencairan_pinjaman');
            $table->bigInteger('takaful');
            $table->bigInteger('angsuran');
            $table->bigInteger('simpanan_anggota_masuk');
            $table->bigInteger('simpanan_anggota_keluar');
            $table->bigInteger('simpanan_kelompok_masuk');
            $table->bigInteger('simpanan_kelompok_keluar');
            $table->bigInteger('simpanan_sukarela_masuk');
            $table->bigInteger('simpanan_sukarela_keluar');
            $table->bigInteger('infaq');
            $table->bigInteger('iuran_anggota');
            $table->bigInteger('lainnya');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kumpulan_anggotas');
    }
};