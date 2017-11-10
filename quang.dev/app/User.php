<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    // protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','mobile','address','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static function store($data){
        User::create($data);
        return true;
    }
    public static function edit($id, $data){
        return User::find($id)->update($data);
        
    }
    public static function getShow($id){
        return User::where('id',$id)->first();        
    }
    public static function destroy($id){
        User::find($id)->delete();
        return true;
    }
}
