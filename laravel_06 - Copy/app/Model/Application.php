<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
    	'name'
    ];
    public static function store($data){
    	Application::create($data);
    	return true;
    }
}
