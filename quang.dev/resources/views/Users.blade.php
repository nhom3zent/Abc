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
	<script>
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
	</script>
</head>
<body>
	<table class="table table-hover">
		<span><h2 style="text-align: center;">Danh sách</h2></span>
		<a href="{{ route('users.create') }}"><button class="btn btn-warning">Thêm mới</button></a>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Address</th>
				<th>Created_at</th>
				<th>Action</th>
			</tr>
		</thead>	
		<tbody>
			@foreach($user as $value)
			<tr  id="tr-{{ $value->id }}">
				<td>{{ $value->id }}</td>
				<td>{{ $value->name }}</td>
				<td>{{ $value->email }}</td>
				<td>{{ $value->mobile }}</td>
				<td>{{ $value->address }}</td>
				<td>{{ $value->created_at }}</td>
				<td>
					<a href="{{ route('users.show', $value->id) }}"><button class="btn btn-danger">Detail</button></a>
					<a href="{{ route('users.edit', $value->id) }}"><button class="btn btn-primary">Edit</button></a>
					{{-- <form action="{{ route('users.delete', $value->id) }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						
					</form> --}}
					<button data-id = "{{ $value->id }}" type="submit" class="btn btn-success">Delete</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>

	<script>
		$(function(){
			$('.btn-success').click(function(){
				var id = $(this).data('id');
				swal({
					title: "Bạn có muốn xóa không?",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Có",
					cancelButtonText: "Không",
					// closeOnConfirm: false
				},
				function(){
					$.ajax({
						type:'delete',
						url: 'users/' +id,
						success: function(data){
							// swal("Delete!", "Bạn đã xóa thành công");

							toastr.success('Bạn đã xóa thành công.');
							$('#tr-'+id).remove();
							// setTimeout(function(){
							// 	window.location.reload();
							// },1000);
						}
					});
				});
			});
		})
	</script>
</html>