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
        Schema::create('user_members', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('no_kk');
            $table->string('foto_kk');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->integer('himpunan_id');
            $table->integer('user_fo_id');
            $table->bigInteger('sisa_cicilan');
            $table->bigInteger('simpanan_pokok');
            $table->bigInteger('simpanan_kelompok');
            $table->bigInteger('simpanan_sukarela');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_members');
    }
};