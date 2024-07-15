<?php

namespace App\Models;

use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
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
        'role'
    ];

    public function userfo() {
        return $this->belongsTo(UserFO::class);
    }

    public function usermember() {
        return $this->belongsTo(UserMember::class);
    }

    protected function casts(): array
    {
        return [
            'role' => UserRole::class,
        ];
    }

}