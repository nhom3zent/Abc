<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
    'user_id','phone'
    ];
    public function user(){
    	return $this->belongsTo('App\Model\User');
    }
}
