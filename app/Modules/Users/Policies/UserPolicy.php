<?php

namespace App\Modules\Users\Policies;

use App\Modules\Users\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

final class UserPolicy
{
    use HandlesAuthorization;

    public function view(User $user, User $model): bool
    {
        return $user->id === $model->id;
    }

    public function update(User $user, User $model): bool
    {
        return $user->id === $model->id;
    }

    public function delete(User $user, User $model): bool
    {
        return $user->id === $model->id;
    }
}
