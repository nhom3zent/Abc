<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StoreUsersPost;
class UsersController extends Controller
{
    public  function index(){
    	$user = User::get();
    	return view('Users',[
    		'user' => $user,
    	]);
    }
    public function show($id){
        // dd('dd');
    	$user = User::getShow($id);
    	return view('UserShow',[
    		'user' => $user,
    	]);
    }
    public function create(){
    	return view('create');
    }
    public function edit($id){
        
        $users = User::getShow($id);
        
        return view('update',[
                'users' => $users
            ]);
    }
     public function update(Request $request, $id){
        $data = $request->all();
        // dd($data);
        unset($data['_token']);
        unset($data['_method']);
         $rules = [
            'name' => 'required|min:8',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'mobile' => 'numeric',
            'address' => 'required'
        ];
        $messages = [
            'name.required' => 'Không được bỏ trống.',
            'name.min'=>'Điền lớn hơn 8 ký tự',
            'mobile.numeric' => 'Phải điền số',
            'address.required' => 'Không được bỏ trống'
        ];
        
        $validator = \Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator->errors())
                            ->withInput();
        }
        // dd($data);
        if($request->hasFile('image')){
            $path = $request->file('image')->store('image');
            $data['image'] = $path;

        }
        $update = User::edit($id, $data);
         return response()->json([
            'error'=> false,
            'message' => 'Update thành công!'

            ]);
        // return redirect()->route('users.index');
    }
    public function store(Request $request){
    	$data = $request->all();
    	unset($data['_token']);
        $rules = [
            'name' => 'required|min:8',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
            'mobile' => 'numeric',
            'address' => 'required'
        ];
        $messages = [
            'name.required' => 'Không được bỏ trống.',
            'name.min'=>'Điền lớn hơn 8 ký tự',
            'mobile.numeric' => 'Phải điền số',
            'address.required' => 'Không được bỏ trống'
        ];
        
        $validator = \Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator->errors())
                            ->withInput();
        }

        if($request->hasFile('image')){
            $path = $request->file('image')->store('image');
            $data['image'] = $path;
        }
        // dd($data);
    	User::store($data);
    	return redirect()->route('users.index');
    }
    public function delete($id){
    	User::destroy($id);
    	
        return response()->json([
            'error'=> false,
            'message' => 'Xóa thành công!'

            ]);
    }
}
