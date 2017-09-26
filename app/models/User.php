<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;
use App\models;

class User extends Model
{

  public function score()
    {
        return $this->hasOne('Score');
    }


}
