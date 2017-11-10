<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
class User extends Model
{
    
    use SoftDeletes;
	
	 protected $fillable = [
        'name', 'email', 'password','mobile','address', 'user_name'
    ];
    public static function getAll(){
    	return User::get();
    }
    public  function getShow($id){
    	return $this->find($id);
    }
    public function phone(){
        return $this->hasOne('App\Model\Phone');
    }
    public function blogs(){
        return $this->hasMany('App\Model\Phone','user_id');
    }
}
