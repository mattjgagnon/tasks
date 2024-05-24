<?php

namespace App\Modules\Tasks\Models;

use App\Modules\Tags\Models\Tag;
use App\Modules\Users\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

final class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'title', 'description', 'status', 'priority', 'assigned_user_id', 'reporter_user_id', 'due_date'
    ];

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }

    public function reporterUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reporter_user_id');
    }
}
