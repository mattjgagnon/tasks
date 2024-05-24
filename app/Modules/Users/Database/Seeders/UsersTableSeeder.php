<?php

namespace App\Modules\Users\Database\Seeders;

use App\Modules\Users\Models\User;
use Illuminate\Database\Seeder;

final class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(1)->create();
    }
}
