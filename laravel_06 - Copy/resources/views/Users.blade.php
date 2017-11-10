<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="">
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</head>
<body>
	<table class="table table-hover table-striped table-bordered" id="example">
		<a href="{{ route('users.create') }}"><button>Thêm mới</button></a>
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Gender</th>
				<th>Address</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($userShow as $value)
				<tr>
					<td>{{ $value->id }}</td>
					<td>{{ $value->name }}</td>
					<td>{{ $value->email }}</td>
					<td>{{ $value->mobile }}</td>
					<td>
						
					</td>
					<td>{{ $value->address }}</td>
					<td>
						<a href="{{ route('users.show',$value->id) }}"><button class= "btn btn-xs btn-danger">Detail</button></a>
						<a href=""><button class= "btn btn-xs btn-warning">Update</button></a>
						<a href=""><button class= "btn btn-xs btn-info">Delete</button></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>