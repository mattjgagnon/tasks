<?php

namespace App\Modules\Tasks\Database\Seeders;

use App\Modules\Tasks\Models\Task;
use Illuminate\Database\Seeder;

final class TasksTableSeeder extends Seeder
{
    public function run(): void
    {
        Task::factory()->count(10)->create();
    }
}
