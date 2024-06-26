<?php

namespace App\Modules\Tags\Policies;

use App\Modules\Tags\Models\Tag;
use App\Modules\Users\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

final class TagPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Tag $tag): bool
    {
        return true;
    }

    public function update(User $user, Tag $tag): bool
    {
        return true;
    }

    public function delete(User $user, Tag $tag): bool
    {
        return true;
    }
}
