<?php

namespace Modules\Tags\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\Users\Models\User;

final class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users(): MorphToMany
    {
        return $this->morphedByMany(User::class, 'taggable');
    }
}
