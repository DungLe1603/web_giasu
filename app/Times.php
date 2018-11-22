<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'created_at', 'updated_at', 'delete_flag''
        
    ];
}
