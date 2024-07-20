<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kumpulan extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'tanggal',
        'judul_materi',
        'himpunan_id'
    ];

    public function kumpulanAnggotas()
    {
        return $this->hasMany(KumpulanAnggota::class);
    }
}