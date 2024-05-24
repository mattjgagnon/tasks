<?php

namespace App\Modules\Users\Models;

use App\Modules\Tags\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
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

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
