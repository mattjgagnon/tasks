<?php

namespace Modules\Users\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Users\Models\User;

final class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(1)->create();
    }
}
