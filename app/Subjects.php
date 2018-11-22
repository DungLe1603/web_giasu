<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'description', 'created_at', 'updated_at', 'delete_flag'
    ];
}