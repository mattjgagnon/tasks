<?php

namespace Database\Seeders;

use App\Modules\Tags\Database\Migrations\CreateTagsTable;
use App\Modules\Tasks\Database\Migrations\CreateTasksTable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        (new CreateTagsTable)->up();
        (new CreateTasksTable)->up();
    }
}
