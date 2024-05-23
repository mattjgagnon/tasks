<?php

namespace Modules\Tags\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Tags\Models\Tag;

final class TagsTableSeeder extends Seeder
{
    public function run(): void
    {
        Tag::factory()->count(10)->create();
    }
}
