<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject_post extends Model
{
    //
    protected $fillable = [
        'post_id', 'subject_id', 'created_at', 'updated_at', 'delete_flag'
    ];
}
