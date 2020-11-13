<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'text' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'user_id'=> \App\Models\User::factory(),
            'task_id'=> \App\Models\Task::factory(),
        ];
    }
}
