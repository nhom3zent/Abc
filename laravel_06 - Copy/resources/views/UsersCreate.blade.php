<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
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
	<form action="{{ route('users.store') }}" method="POST" role="form" enctype="multipart/form-data" id="form">
		<legend>Form title</legend>
		{{ csrf_field() }}
	
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ old('name') }}">
		</div>
		@if($errors->has('name'))
			<p style="color: blue">{{ $errors->first('name') }}</p>
		@endif
		<div class="form-group">
			<label for="">email</label>
			<input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}">
		</div>
		@if($errors->has('email'))
			<p style="color: blue">{{ $errors->first('email') }}</p>
		@endif
		<div class="form-group">
			<label for="">password</label>
			<input type="password" name="password" class="form-control" id="password" value="{{ old('password') }}">
		</div>
		@if($errors->has('password'))
			<p style="color: blue">{{ $errors->first('password') }}</p>
		@endif
		<div class="form-group">
			<label for="">mobile</label>
			<textarea class="form-control" name="mobile" id="mobile" cols="30" rows="4" value="{{ old('mobile') }}"></textarea>
		</div>
		@if($errors->has('mobile'))
			<p style="color: blue">{{ $errors->first('mobile') }}</p>
		@endif
		<div class="form-group">
			<label for="">address</label>
			<textarea class="form-control" name="address" id="address" cols="30" rows="4" value="{{ old('address') }}"></textarea>
		</div>
		@if($errors->has('address'))
			<p style="color: blue">{{ $errors->first('address') }}</p>
		@endif
		{{-- @if(count($errors)>0)
			<div class="alert alert-danger">
				{{ $errors->first() }}
			</div>
		@endif --}}
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
	
</body>
</html>