<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\User;

class BoardUser extends Model
{
    use HasFactory;

    public function User()
    {
        return $this -> belongsTo('App\Models\User');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function Board()
    {
        return $this -> belongsTo('App\Models\Board');
    }
}
