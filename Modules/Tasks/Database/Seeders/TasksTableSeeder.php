<?php

namespace Modules\Tasks\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Tasks\Models\Task;

final class TasksTableSeeder extends Seeder
{
    public function run(): void
    {
        Task::factory()->count(10)->create();
    }
}
