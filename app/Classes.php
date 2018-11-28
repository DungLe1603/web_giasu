<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
  protected $fillable = [
    'id',
    'name',
    'description',
    'created_at',
    'updated_at',
    'delete_flag',
  ];

  public function posts(){
    return $this->belongsToMany('App\classes','class_post', 'post_id', 'class_id');
  }
}
