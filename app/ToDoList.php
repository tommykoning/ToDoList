<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ToDoList extends Model
{
    protected $fillable = [
        'name',
        'user_id'
    ];

    public function Tasks() {
        return $this->hasMany('App\Task');
    }
}
