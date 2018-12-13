<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'username', 'password', 'role_id', 'created_at', 'updated_at', 'delete_flag'
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tutor()
    {
        return $this->hasOne('App\Tutor', 'id');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function roleAdmin(){
        $has_role_admin = $this->whereHas('role',function($query){
            $query->where('name', 'Admin');
        })->where('id',$this->id)->get();
        
        if(count($has_role_admin)>0)
            return true;
        return false;
    }
}
