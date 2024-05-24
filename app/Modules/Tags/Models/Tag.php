<?php

namespace App\Modules\Tags\Models;

use App\Modules\Users\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

final class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users(): MorphToMany
    {
        return $this->morphedByMany(User::class, 'taggable');
    }
}
