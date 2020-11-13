<?php

namespace Database\Factories;

use App\Models\BoardUser;
use App\Models\Board;
use App\Models\User;
use App\Models\Task;

use Illuminate\Database\Eloquent\Factories\Factory;

class BoardUserFactory extends Factory
{
    protected $model = BoardUser::class;

    public function definition()
    {
        return [
            'user_id'=> \App\Models\User::factory(),
            'board_id'=> \App\Models\Board::factory(),
        ];
    }
}
