<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('demo',function(){
	echo "Demo";
});
Route::get('list',function(){
	return view('list');
});
Route::get('tag',function(){
	return view('user.tag');
});
Route::get('menu',function(){
	return view('user.menu');
});
Route::get('blog',function(){
	return view('user.blog');
});
Route::get('about',function(){
	return view('user.about');
});
Route::get('contact',function(){
	return view('user.contact');
});


// 	POST – Create: Tạo dữ liệu mới
// GET – Read: Lấy dữ liệu về
// PUT – Update: Cập nhật dữ liệu
// DELETE – Delete: Xóa dữ liệu

	// method get : lấy dữ liệu về
	// Route::get('/',function(){
	// return 'Zent Group';
	// });
	Route::get('/zent',function(){
		return 'ok';
	});
	Route::get('add',function(){
		echo '<form action="/user" method="post" accept-charset="utf-8">'.
			csrf_field().'
			<input type="submit" name="" value="post data">
		</form>';
	});
	Route::get('demo123', function(){
		return view('demo');
	});

	//method post : tạo dữ liệu mới
	Route::get('add1',function(){
		echo '<form action="/user" method="post" accept-charset="utf-8">
			
			<input type="submit" name="" value="post data">
		</form>';
	});
	Route::post('user',function(){
		return 'this is method post';
	});


	//method put : cập nhật dữ liệu
	Route::get('add2',function(){
		echo '<form action="/put" method="post" accept-charset="utf-8">
			<input type="hidden" name="_method" value="PUT">
			<input type="submit" name="" value="put data">
		</form>';
	});
	Route::put('put',function(){
		return 'this is method put';
	});

	// method delete: xóa dữ liệu
	Route::get('add3',function(){
		echo '<form action="/delete" method="post" accept-charset="utf-8">
			<input type="hidden" name="_method" value="DELETE">
			<input type="submit" name="" value="delete data">
		</form>';
	});
	Route::delete('delete',function(){
		return 'this is method delete';
	});

//method match

Route::get('add4',function(){
	echo '<form action="/match" method="post" accept-charset="utf-8">
		
		<input type="submit" name="" value="post data">
	</form>';
});
Route::get('add5',function(){
	echo '<form action="/match" method="post" accept-charset="utf-8">
		<input type="hidden" name="_method" value="PUT">
		<input type="submit" name="" value="post data">
	</form>';
});
Route::match(['get','post','put'],'/match', function(){
	return "Zent";
});



Route::get("/nguoi-dung",['as'=>'user',function(){
	return "Zent";
}]);
Route::get('/call',function(){
	return Redirect()->route('user');
});



Route::group(['prefix'=>'user'], function(){
	Route::get('list', function(){
		echo " User->list";
	});
	Route::get('add', function(){
		echo " User->add";
	});
	Route::get('update', function(){
		echo " User->update";
	});
	Route::get('detail', function(){
		echo " User->detail";
	});
	Route::get('id/{id}',function($id){
		return "ID = ".$id;
	});
});

//route sử dụng tham số
// Route::get('lop/{lop_id}/unit/{unit}', function($lop_id, $unit){
// 	return "Lop ID = " . $lop_id . " - Unit: " .$unit;
// 	});
// tham số không bắt buộc
// tham số unit có thể có hoặc có thể k có 
// Route::get('{lop_id}/{unit?}', function($lop_id, $unit=null){
// 	return "Lop ID = " . $lop_id . " - Unit: " .$unit;
// });

// Route::get('users', function () {
//     return "Xin chào";
// });
// xác định tham số theo mẫu ký tự
Route::get('user1/{name?}', function ($name=null) {
    return "Xin chào: " .$name;
})
->where('name', '[A-Za-z]+');// không thể điền số, ký tự đặc biệt...


//BUOI 
// Route::get('',function(){
// 	return 'Hello Zent';
// })->name('home');
Route::get('xxxs', function(Request $request){
	return 'XXX';
})->middleware('checkage');

// //BUOI 12
 
//  Route::get('','Blog\BlogController@index');

 // Route::get('user/{id}', function($id){
 // 	return $id;
 // });
 Route::get('user/{id}/{name}', 'UserController@show');

 Route::get('home1','Blog\BlogController@index1');
 Route::get('user/{id}','UserController@show1')->name('user.show1');


  // Route::get('profile','ProfileController');


// gọi bắng đuognừ link laravel.zent/photos/...
  Route::resource('photos', 'PhotoController');

  //chỉ sử dụng route index và delete
  Route::resource('photos', 'PhotoController', ['only' => ['index','delete']]);

  // nhận tất cả các route trừ edit
  Route::resource('photos1', 'PhotoController', ['except' => ['edit']]);

  Route::get('btvn-menu','BTVNController@menu');
  Route::get('btvn-blog','BTVNController@blog');
  Route::get('btvn-contact','BTVNController@contact');
  Route::get('btvn-about','BTVNController@about');


  Route::get('con-demo','DemoController@index');

  Route::get('profiles', 'ProfileController@profiles');
  Route::get('profiles/{id}', 'ProfileController@show')->name('profiles.show');


  // Route::get('blog', 'BlogsController@index');
  // Route::get('blog/{id}', 'BlogsController@show')->name('blogs.show');


	Route::get('users', 'UserController@index')->name('users.index');
 	 Route::post('users/store', 'UserController@store')->name('users.store');
  Route::get('users/create', 'UserController@create')->name('users.create');
	Route::get('users/{id}', 'UserController@show')->name('users.show');


	Route::get('blog', 'BlogController@index')->name('blogs.index');
	Route::get('blog/create', 'BlogController@create')->name('blogs.create');
	Route::post('blog/store', 'BlogController@store')->name('blog.store');
	Route::get('blog/{id}/edit', 'BlogController@edit')->name('blog.edit');
	Route::put('blog/{id}', 'BlogController@update')->name('blogs.update');
	Route::get('blog/{id}', 'BlogController@show')->name('blog.show');

	Route::delete('blog/{id}', 'BlogController@destroy')->name('blogs.delete');

	// Route::get('/', function(){
	// 	DB::connection()->enableQueryLog();
	// 	$user = DB::table('users')->select('id', 'name')->where('email','like', '%@gmail.com')->get();
	// 	$query = DB::getQueryLog();
	// 	dd($query);
	// });
	
	// Route::get('/', function(){
	// 	DB::connection()->enableQueryLog();
	// 	$user = DB::table('users')->where('id', '>=' , '22')->where('id', '<=' , '33')->get();
	// 	$query = DB::getQueryLog();
	// 	dd($user);
	// });
	
	// Route::get('/', function(){
	// 	$user = DB::table('blogs')->select('blogs.*', 'users.name')->join('users', 'users.id', '=', 'blogs.user_id')->get();
	// 	$query = DB::getQueryLog();
	// 	dd($user);
	// });
	use App\Model\User;
	use App\Model\Phone;
	// Route::get('/', function(){
	// 	// $users = User::all();
	// 	$users = User::find(34);
	// 	// $users = App\Users::where('id', 36)->orderBy('name', 'desc')->take(6)->get();
	// 	// $users = User::withTrashed()->where('id',34)->restore();
	// 	dd($users->name);
	// });
	// 
	// Route::get('123', function(){
		
	// 	$users = App\Users::where('id','19')->get();
	// 	dd($users);
	// });
 
	Route::get('xxa', function(){
		// dd('sss');
		// $x = User::where('users.id',30)->join('phones','users.id','=','phones.user_id')->first();
		$x = User::find(30)->phone;
		// $x = Phone::find(1)->user;
		dd($x);
	});
	Route::get('xx', function(){
		// $x = User::find(30)->blogs;
		$x = Phone::find(2)->user;
		// $xx = \App\Model\Blog::get();
		dd($x->name);
		return view('welcome',['blogs'=> $xx]);
	});
	Route::get('login','BlogController@login')->name('login');
	Route::post('loginblog','BlogController@loginblog')->name('loginblog');
	Route::post('comment','BlogController@commentStore')->name('comment');
	

	// Auth::routes();

	// Route::get('/home', 'HomeController@index')->name('home');
	
	Route::get('todo','ApplicationController@index')->name('todo.index');
	Route::post('todo','ApplicationController@store')->name('todo.create');
	Route::put('todo/{id}','ApplicationController@update')->name('todo.update');
	Route::get('todo/{id}','ApplicationController@show')->name('todo.show');
	Route::delete('todo/{id}','ApplicationController@destroy')->name('todo.delete');
	Route::get('todo/{id}/edit','ApplicationController@edit')->name('todo.edit');

	Route::get('language', function(){
		return view('Language');
	})->middleware('language');

	Route::get('language/{locale}', function($locale){
		Session::put('locale', $locale);
		// session('locale', $locale);
		return redirect()->back();
	});