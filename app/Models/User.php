<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'nama',
        'foto_ktp',
        'no_hp',
        'provinsi',
        'kokab',
        'kecamatan',
        'kelurahan',
        'rw',
        'rt',
        'alamat',
        'mitra'
    ];

    public function userfo() {
        return $this->hasOne('App\Models\UserFO');
    }


}