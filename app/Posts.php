<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
  //
  protected $fillable = [
    'id',
    'parent_name',
    'address',
    'phone',
    'student_name',
    'number_student',
    'number_time',
    'time_id',
    'tutor_level_id',
    'tutor_gender_id',
    'requirement',
    'created_at',
    'updated_at',
    'delete_flag'
  ];

  // public function time() {
  //   return $this->belongTo('App\Times', 'time_id');
  // }

  // public function tutor_level() {
  //   return $this->belongsTo('App\levels', 'tutor_level_id');
  // }

  // public function tutor_gender() {
  //   return $this->belongsTo('App\levels', 'tutor_gender_id');
  // }

  // public function subjects(){
  //   return $this->belongsToMany('App\Subjects', 'subject_post', 'subject_id', 'post_id');
  // }

  // public function classes(){
  //   return $this->belongsToMany('App\classes','class_post', 'class_id', 'post_id');
  // }

}
