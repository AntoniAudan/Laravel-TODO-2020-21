<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Comment;
use App\Models\User;
use App\Models\Board;
use App\Models\TaskUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'due_date'=> $this->faker->date,
            'state' => $this->faker->randomElement($array = array ('todo','in progress','done')),
            'category_id' => \App\Models\Category::factory(),
            'board_id' => \App\Models\Board::factory(),
        ];
    }
}
