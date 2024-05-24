<?php

namespace App\Modules\Tags\Database\Factories;

use App\Modules\Tags\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

final class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}
