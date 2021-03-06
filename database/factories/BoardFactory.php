<?php

namespace Database\Factories;

use App\Models\Board;
use App\Models\User;
use App\Models\BoardUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class BoardFactory extends Factory
{
    protected $model = Board::class;

    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'description' => $this->faker->sentence,
            'user_id'=> \App\Models\User::factory(),
        ];
    }
}
