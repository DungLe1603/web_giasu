<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_post extends Model
{
    //
    protected $fillable = [
        'post_id', 'class_id', 'created_at','updated_at', 'delete_flag'];

}
