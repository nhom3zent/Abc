<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Profile;
class ProfileController extends Controller
{
    public function profiles(){

    	// $profiles = new profile;
    	// $user = profile->getAll();
    	$user = Profile::getAll();

    	// $user = DB::table('data')->get();
    	// dd($user);
    	return view('profiles', [
    			'UserView' => $user 
    		]);
    }

    //xem chi tiết profile
    public function show($id){
    	$profile = Profile::getProfileById($id);
    	return view('user.show',[
    			'ShowView' => $profile
    		]);
    }
}
