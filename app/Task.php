<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function Tasks() {
        return $this->belongsTo('App\ToDoList');
    }
}
