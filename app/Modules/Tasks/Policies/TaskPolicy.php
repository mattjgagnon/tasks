<?php

namespace App\Modules\Tasks\Policies;

use App\Modules\Tasks\Models\Task;
use App\Modules\Users\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

final class TaskPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Task $task): bool
    {
        return true;
    }

    public function update(User $user, Task $task): bool
    {
        return true;
    }

    public function delete(User $user, Task $task): bool
    {
        return true;
    }
}
