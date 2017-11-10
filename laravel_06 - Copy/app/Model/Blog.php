<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
class Blog extends Model
{	
	protected $fillable = [
		'title', 'image', 'description', 'content','user_id'
	];
	
	/**
	 *  lay tat car cac blogs
	 * @return [type] [description]
	 */
    public static function getAll(){
    	return Blog::get();
    }

    public static function getShow($id){
    	return Blog::find($id);
    }

    /**
     * [destroy xoa dữ liệu
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public static function destroy($id){
    	Blog::where('id', $id)->delete();
    	return true;
    }

    public static function store($data){
    	Blog::create($data);
    	return true;
    }

    public static function updateBlog($id,$data){
    	return Blog::find($id)->update($data);
    } 
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag','blog_tags','blogs_id','tags_id');
    }

}
