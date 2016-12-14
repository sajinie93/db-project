<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    // defining One to One relationship
//    public function model_name(){
//        return $this->hasOne('path_to_model','foreign_key', 'primary_key');
//    }
    public function teacher(){
        return $this->hasOne('App\Teacher','user_id', 'id');
    }
    public function admin(){
        return $this->hasOne('App\Admin','user_id', 'id');
    }
    public function student(){
        return $this->hasOne('App\Student','user_id', 'id');
    }


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
