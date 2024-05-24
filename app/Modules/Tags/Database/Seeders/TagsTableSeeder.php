<?php

namespace App\Modules\Tags\Database\Seeders;

use App\Modules\Tags\Models\Tag;
use Illuminate\Database\Seeder;

final class TagsTableSeeder extends Seeder
{
    public function run(): void
    {
        Tag::factory()->count(10)->create();
    }
}
