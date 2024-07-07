<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMember extends Model
{
    use HasFactory;
/**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'no_kk',
        'foto_kk',
        'agama',
        'pekerjaan',
        'tempat_lahir',
        'tanggal_lahir',
        'himpunan_id',
        'user_fo_id',
        'sisa_cicilan',
        'simpanan_pokok',
        'simpanan_kelompok',
        'simpanan_sukarela'
    ];
}