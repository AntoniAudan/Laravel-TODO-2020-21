<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class board extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'description',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function User()
    {
        return $this -> belongsToMany('App\Models\User');
    }

}
