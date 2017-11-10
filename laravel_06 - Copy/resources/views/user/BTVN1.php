<?php 
	
// 	POST – Create: Tạo dữ liệu mới
// GET – Read: Lấy dữ liệu về
// PUT – Update: Cập nhật dữ liệu
// DELETE – Delete: Xóa dữ liệu

	// method get : lấy dữ liệu về
	Route::get('/',function(){
	return 'Zent Group';
	});
	Route::get('/zent',function(){
		return 'ok';
	});
	Route::get('add',function(){
		echo '<form action="/users" method="post" accept-charset="utf-8">'.
			csrf_field().'
			<input type="submit" name="" value="post data">
		</form>';
	});


	//method post : tạo dữ liệu mới
	Route::get('add1',function(){
		echo '<form action="/users" method="post" accept-charset="utf-8">
			
			<input type="submit" name="" value="post data">
		</form>';
	});
	Route::post('users',function(){
		return 'this is method post';
	});


	//method put : cập nhật dữ liệu
	Route::get('add2',function(){
		echo '<form action="/put" method="post" accept-charset="utf-8">
			<input type="hidden" name="_method" value="PUT">
			<input type="submit" name="" value="post data">
		</form>';
	});
	Route::put('put',function(){
		return 'this is method put';
	});

	// method delete: xóa dữ liệu
	Route::get('add3',function(){
		echo '<form action="/delete" method="post" accept-charset="utf-8">
			<input type="hidden" name="_method" value="DELETE">
			<input type="submit" name="" value="post data">
		</form>';
	});
	Route::put('delete',function(){
		return 'this is method delete';
	});

	Route::get('lop/{lop_id}/unit/{unit}', function($lop_id, $unit){
	return "Lop ID = " . $lop_id . " - Unit: " .$unit;
	});
 ?>