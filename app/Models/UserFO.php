<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFO extends Model
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
        'foto_ktp',
        'email',
        'no_hp',
        'provinsi',
        'kokab',
        'kecamatan',
        'kelurahan',
        'rw',
        'rt',
        'alamat',
        'sertifikasi',
        'coverage_area',
        'jumlah_himpunan',
        'jumlah_anggota'
    ];

    public function user() {
        return $this->hasOne(User::class);
    }

}