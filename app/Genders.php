<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{
  protected $fillable = [
  '	id',
  'name',
  'created_at',
  'updated_at',
  'delete_flag'      
  ];

  public function tutors() {
    return $this->hasMany('App\Tutors', 'tutor_id');
  }

  // public function posts() {
  //   return  $this->hasMany('App\Tutors', 'tutor_id');
  // }

}
