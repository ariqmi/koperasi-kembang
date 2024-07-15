<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserMember extends Authenticatable
{
    use HasFactory;
/**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'nama',
        'nik',
        'no_kk',
        'foto_ktp',
        'foto_kk',
        'no_hp',
        'pekerjaan',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'provinsi',
        'kokab',
        'kecamatan',
        'kelurahan',
        'rw',
        'rt',
        'alamat',
        'himpunan_id',
        'user_fo_id',
        'sisa_cicilan',
        'simpanan_pokok',
        'simpanan_kelompok',
        'simpanan_sukarela'
    ];

    public function user() {
        return $this->hasOne(User::class);
    }
}