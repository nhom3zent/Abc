<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
	<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/sweetalert.min.js') }}"></script>
	<script src="{{ asset('js/toastr.min.js') }}"></script>
</head>
<body>
	<form action="{{-- {{ route('users.update', $users->id ) }} --}}" method="POST" role="form" enctype="multipart/form-data" id="form">
		<legend><h2 align="center">Đăng ký</h2></legend>
		{{ csrf_field() }}
		<input type="hidden" name="id" id="id" value="{{ $users->id }}">
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $users->name }}">
		</div>
		@if($errors->has('name'))
			<p style="color: red">{{ $errors->first('name') }}</p>
		@endif
		<div class="form-group">
			<label for="">email</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{ $users->email }}">
		</div>
		@if($errors->has('email'))
			<p style="color: red">{{ $errors->first('email') }}</p>
		@endif
		<div class="form-group">
			<label for="">password</label>
			<input type="password" class="form-control" name="password" id="password" placeholder="password" value="{{ $users->password }}">
		</div>
		@if($errors->has('password'))
			<p style="color: red">{{ $errors->first('password') }}</p>
		@endif
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" class="form-control" id="image" name="image" value="{{ asset('$users->image') }} }}">
		</div>
		<div class="form-group">
			<label for="">mobile</label>
			<input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile" value="{{ $users->mobile }}">
		</div>
		@if($errors->has('mobile'))
			<p style="color: red">{{ $errors->first('mobile') }}</p>
		@endif
		<div class="form-group">
			<label for="">address</label>
			<input type="text" class="form-control" name="address" id="address" placeholder="address" value="{{ $users->address }}">
		</div>
		@if($errors->has('address'))
			<p style="color: red">{{ $errors->first('address') }}</p>
		@endif
		<input type="hidden" name="_method" value="PUT">
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<script>
		$(document).ready(function() {
			$('#form').submit(function(event) {
				event.preventDefault();
				
				$.ajaxSetup({
					headers:{
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				var formData = new FormData($(this)[0]);
				// var name = $('#name').val();
				// var email = $('#email').val();
				// var password = $('#password').val();
				// var image = $('#image').val();
				// var mobile = $('#mobile').val();
				// var address = $('#address').val();
				$.ajax({
					url: '{{ route('users.update', $users->id) }}',
					type: 'PUT',
					dataType: 'json',
					data: formData,
				})
				.done(function() {
					console.log("success");
					toastr.success('Cập nhật thông tin thành công.');
					setTimeout(function(){ 
					 	location.href = 'http://quang.dev/users';
					}, 1000);
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				
			});
		});
	</script>
</body>
</html>