<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject_tutor extends Model
{
    //
    protected $fillable = [
        'tutor_id', 'subject_id', 'created_at', 'updated_at', 'delete_flag'
        
    ];
}
