<?php

namespace Modules\Users\Database\Factories;

use Modules\Users\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

final class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'password_hash' => bcrypt('password'),
            'full_name' => $this->faker->name,
            'status' => 'active',
        ];
    }
}
