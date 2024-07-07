<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KumpulanAnggota extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'kumpulan_id',
        'user_member_id',
        'absensi',
        'pencairan_pinjaman',
        'takaful',
        'angsuran',
        'simpanan_anggota_masuk',
        'simpanan_anggota_keluar',
        'simpanan_kelompok_masuk',
        'simpanan_kelompok_keluar',
        'simpanan_sukarela_masuk',
        'simpanan_sukarela_keluar',
        'infaq',
        'iuran_anggota',
        'lainnya'
    ];
}