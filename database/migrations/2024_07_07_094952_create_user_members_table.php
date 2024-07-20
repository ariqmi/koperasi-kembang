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
            $table->unsignedBigInteger('user_id');
            $table->string('nama');
            $table->string('nik')->unique();
            $table->string('no_kk')->unique();
            $table->string('foto_ktp');
            $table->string('foto_kk');
            $table->string('no_hp');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('provinsi')->default('Jawa Barat');
            $table->string('kokab');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->integer('rw');
            $table->integer('rt');
            $table->text('alamat');
            $table->integer('himpunan_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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