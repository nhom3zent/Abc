<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
    	return 'Hello Zent';
    }
    public function index1(){
    	return redirect()->route('user.show1',2);
    }
}
