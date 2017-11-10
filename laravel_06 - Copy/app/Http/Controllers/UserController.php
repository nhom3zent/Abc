<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
class UserController extends Controller
{
    public function index(){
    	$users = User::getAll();
    	return view('Users',[
    			'userShow' => $users
    		]);
    }
    public function show($id){
    	$user = new User;
        $userID = $user->getShow($id);
    	return view('DetailUsers',[
    			'detail' => $userID
    		]);
    }
    public function create(){
        return view('UsersCreate');
    }
    public function store(Request $request){
        $data = $request->all();
         $rules = [
            'email'   => 'required|email|unique:users|max:255',
            'mobile'  => 'required|numeric',
            'address' => 'required|min:6',
            'name'    => 'required|min:6'
        ];
        $messages = [
            'name.required' => 'Không được bỏ trống',
            'email.required' => 'Không được bỏ trống',
            'email.email'    => 'Định dạng sai',
            'email.unique'   => 'Trùng email',
            'mobile.numeric' => 'Sđt phải điền số',
        ];
        $validator = \Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator->errors())
                            ->withInput();
        }
        User::create($data);
        return redirect()->route('users.index');

    }
}
