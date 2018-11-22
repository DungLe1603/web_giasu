<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $fillable = [
        'id', 'parent_name', 'address', 'phone', 'student_name', 'number_student', 'number_time', 'time_id', 'tutor_level_id', 'tutor_gender_id', 'requirement', 'created_at', 'updated_at', 'delete_flag'
    ];
}
