<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_tutor extends Model
{
  protected $fillable = [
    'tutor_id',
    'class_id',
    'created_at',
    'updated_at',
    'delete_flag'      
  ];
}
