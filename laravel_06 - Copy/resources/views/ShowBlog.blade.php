
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
	<script src="{{ asset('js/toastr.min.js') }}"></script>
</head>
<body>
	<div class="container">
		<li>Title: {!! $blog->title !!}</li>
		<li>Description: {!! $blog->description !!}</li>
		<li>Content: {!! $blog->content !!}</li>
		<li>User_id: 
			@foreach ( $users as $value)
				@if ($value->id == $blog->user_id)
					{{ $value->name }}
				@endif
			@endforeach
		</li>
		<li>Image: <img class="img-responsive;" style="width: 300px; height:300px;" src="{{ asset($blog->image) }}" alt=""></li>
		@php
			session_start();
			
			$email = $_SESSION['ttin']['email'];
			// echo $email;

		@endphp
		@foreach ($users as $user)
			@if ($user->email == $email)
				<form action="{{ route('comment') }}" method="POST" role="form">
					<legend>COMMENT</legend>
					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="">User_ID</label>
						<input type="text" name="user_id" class="form-control" id="" readonly="readonly" value="{{ $user->id }}">
					</div>
					<div class="form-group">
						<label for="">Blog_ID</label>
						<input type="text" name="blog_id" class="form-control" id="" readonly="readonly" value="{{ $blog->id }}">
					</div>
					<div class="form-group">
						<label for="">Ý kiến</label>
						<input type="text" name="comment" class="form-control" id="" placeholder="Ý kiến">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			@endif
		@endforeach
	</div>
</body>
</html>