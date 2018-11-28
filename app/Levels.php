<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
  protected $fillable = [
    'id',
    'name',
    'created_at',
    'updated_at',
    'delete_flag'     
  ];

  public function post() {
    return $this->hasMany('App\Posts', 'level_id');
  }
}
