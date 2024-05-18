<?php

namespace Modules\Users\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

final class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public mixed $id;

    protected $fillable = [
        'email', 'password_hash', 'full_name', 'status'
    ];

    protected $hidden = [
        'password_hash', 'remember_token',
    ];
}
