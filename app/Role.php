<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Role extends Model
{
    public function user_role() {
        return $this->hasMany('App\User');
    }

}
