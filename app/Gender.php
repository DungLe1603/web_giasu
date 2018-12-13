<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
  protected $fillable = [
  '	id',
  'name',
  'created_at',
  'updated_at',
  'delete_flag'      
  ];

  public function tutors() {
    return $this->hasMany('App\Tutor', 'tutor_id');
  }

  // public function posts() {
  //   return  $this->hasMany('App\Tutors', 'tutor_id');
  // }

}
