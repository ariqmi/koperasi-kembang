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
        'email',
        'sertifikasi',
        'coverage_area',
        'jumlah_himpunan',
        'jumlah_anggota'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}