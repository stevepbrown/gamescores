<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;



class Score extends Model
{
  protected $guarded = ['id'];

  public function user()
  {
      {
        return $this->belongsTo('App\models\User');
    };
  }
}
