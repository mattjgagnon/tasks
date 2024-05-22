<?php

namespace Modules\Tasks\Database\Factories;

use App\Models\User;
use Modules\Tasks\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

final class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->word,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->word,
            'priority' => $this->faker->word,
            'assigned_user_id' => User::factory(),
            'reporter_user_id' => User::factory(),
            'due_date' => $this->faker->date,
        ];
    }
}
