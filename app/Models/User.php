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
    ];

    public function userfo() {
        return $this->belongsTo(UserFO::class);
    }

    public function usermember() {
        return $this->belongsTo(UserMember::class);
    }

}