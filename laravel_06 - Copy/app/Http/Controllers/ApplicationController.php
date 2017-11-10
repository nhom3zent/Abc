<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Application;
class ApplicationController extends Controller
{
   	public function index(){
   		$names = Application::get();
   		return view('ApplicationIndex',[
   			'names' => $names
   		]);
   	}
   	public function show($id){
   		$name = Application::find($id);
   		return view('ApplicationShow',[
   			'name' => $name
   		]);
   	}
   	public function store(Request $request){
   		$data = $request->all();
   		Application::create($data);
   		return response()->json([
            'error'=> false,
            'message' => 'Thêm thành công!'

            ]);
   	}
      public function destroy($id){
         Application::find($id)->delete();
         return response()->json([
            'error' => false,
            'message' => 'xóa thành công.'
         ]);
      }
      public function edit($id){
         $data = Application::find($id)->first();
         return view('ApplicationUpdate',[
            'data' => $data
         ]);
      }
      public function update(Request $request, $id){
         $data = $request->all();
         Application::find($id)->update($data);
         return redirect()->route('todo.index');
      }
}
