<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'created_at', 'updated_at', 'delete_flag'
        
    ];
}
