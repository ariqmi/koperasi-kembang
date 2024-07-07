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
            $table->integer('user_id');
            $table->string('email')->unique();
            $table->string('sertifikasi');
            $table->string('coverage_area');
            $table->integer('jumlah_himpunan')->default(0);
            $table->integer('jumlah_anggota')->default(0);
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