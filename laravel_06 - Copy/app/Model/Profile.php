<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class profile extends Model
{
    // lấy tất cả thông tin profile
    public static function getAll(){
    	return DB::table('data')->get();
    }

    //lấy thông tin profile theo id
    public static function getProfileById($id){
    	return DB::table('data')->where('id', $id)->first();
    }

}
