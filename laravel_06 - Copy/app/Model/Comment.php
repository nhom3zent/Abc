<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'blog_id','user_id','comment'
    ];
    public static function store($data){
    	Comment::create($data);
    	return true;
    }
}
