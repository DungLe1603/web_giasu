<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutors extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'gender_id', 'year_of_birth', 'address', 'email', 'phone', 'level_id', 'school', 'major', 'areas', 'time', 'salary', 'picture', 'created_at', 'updated_at', 'delete_flag'
        
    ];
}
