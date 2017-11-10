<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Latest compiled and minified CSS & JS -->
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> --}}
</head>
<body>
	<form action="{{ route('todo.update', $data->id) }}" method="POST" role="form">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Sửa Thông Tin</label>
			<input type="text" class="form-control" id="" name="name" value="{{ $data->name }}">
		</div>
		<input type="hidden" name="_method" value="PUT">
		<button type="submit" class="btn btn-primary">Sửa</button>
	</form>
</body>
</html>