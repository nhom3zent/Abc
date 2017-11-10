<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Model\Blog;
use App\Model\User;
use App\Model\Comment;
class BlogController extends Controller
{
    public function index(){
    	$users = User::getAll();
    	$blogs = Blog::getAll();
    	return view('blogs' , [
    			'blogs' => $blogs,
    			'users' => $users
    		]);
    }

    public function show($id){
    	$users = User::getAll();
    	$blog = Blog::getShow($id);
    	return view('ShowBlog',[
    			'blog' => $blog,
    			'users' => $users
    		]);
    }

    public function edit($id){
        // dd('dd');
    	$users = User::getAll();
    	$blogs = Blog::find($id);
    	return view('updateBlog', [
    			'blogs' => $blogs,
    			'users' => $users
    		]);
    }

    public function update(Request $request, $id){
    	$data = $request->all();
    	dd($data);
    	unset($data['_token']);
    	unset($data['_method']);
    	if($request->hasFile('image')){
    		$path = $request->file('image')->store('image');
        
    		$data['image'] = $path;
    	}
    	$update = Blog::updateBlog($id, $data);
    	return redirect()->route('blogs.index');
    }

    public function destroy($id){
    	Blog::destroy($id);

    	// return redirect()->back();
    	return response()->json([
    		'error'=> false,
    		'message' => 'Xóa thành công!'

    		]);
    }

    public function create(){
    	$users = User::getAll();
    	return view('create', [
    			'users' => $users
    		]);
    }

    public function store(BlogRequest $request){

    	$data = $request->all();
    	unset($data['_token']);
        
       if($request->hasFile('image')){
            $path = $request->file('image')->store('image');
            
            $data['image'] = $path;
        }
    	Blog::store($data);
    	return redirect()->route('blogs.index');
        
    }
    public function login(){
         $users = User::getAll();         
        return view('LoginBlog',[
            'users' => $users
        ]);
    }
    public function loginblog(Request $request){
        // dd('đ');
        $data = $request->all();
        // dd($data);
        $users = User::getAll();
        return view('Session',[
            'data' => $data,
            'users' => $users
        ]);
    }
    public function commentStore(Request $request){
        
        $data = $request->all();
        // dd($data);
        Comment::store($data);
        // return view('blogs1.show');
    }
}
