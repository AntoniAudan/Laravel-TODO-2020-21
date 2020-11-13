<?php

namespace Database\Factories;

use App\Models\TaskUser;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskUserFactory extends Factory
{
    protected $model = TaskUser::class;

    public function definition()
    {
        return [
            'user_id'=> \App\Models\User::factory(),
            'task_id'=> \App\Models\Task::factory(),
        ];
    }
}
