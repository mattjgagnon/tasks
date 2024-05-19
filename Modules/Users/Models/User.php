<?php

namespace Modules\Users\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Modules\Tags\Models\Tag;

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

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
