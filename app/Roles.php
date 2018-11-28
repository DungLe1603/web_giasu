<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
  protected $fillable = [
    'id',
    'name',
    'description',
    'created_at',
    'updated_at',
    'delete_flag'      
  ];
  public function user() {
    return $this->hasMany('App\User', 'role_id');
  }
}
