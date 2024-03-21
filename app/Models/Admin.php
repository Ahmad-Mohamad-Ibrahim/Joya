<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Admin extends Authenticatable implements JWTSubject
{
    use HasFactory;
    public function super_admin(): BelongsTo
    {
        return $this->BelongsTo(Admin::class);
    }

    protected $fillable = [
        'username',
        'id',
        'password',
        'email',
        'super_admin_id',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}