<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Mobile</th>
				<th>Sex</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			@foreach($UserView as $value)
				<tr>
					<td>{{ $value->id }}</td>
					<td>{{ $value->name }}</td>
					<td>{{ $value->mobi }}</td>
					<td>
						@if ($value->gender)
							Nam
						@else
						Nữ
						@endif
					</td>
					<td>
					<a href="{{ route('profiles.show', $value->id) }}"><button class="btn btn-xs btn-info">Xem</button></a>
					<button class="btn btn-xs btn-warning">Sửa</button>
					<button class="btn btn-xs btn-danger">Xóa</button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>