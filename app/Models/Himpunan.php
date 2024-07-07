<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Himpunan extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_himpunan',
        'kode_himpunan',
        'tanggal_aktivasi',
        'provinsi',
        'kokab',
        'kecamatan',
        'kelurahan',
        'rw',
        'rt',
        'alamat',
        'user_fo_id',
        'mitra',
        'email_mitra',
        'no_hp_mitra',
    ];
}