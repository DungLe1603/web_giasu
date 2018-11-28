<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
  protected $fillable = [
    'id',
    'name',
    'description',
    'created_at',
    'updated_at',
    'delete_flag'      
  ];

  public function posts(){
    return $this->belongsToMany('App\Post','subject_post', 'post_id' 'subject_id');
  }
}
