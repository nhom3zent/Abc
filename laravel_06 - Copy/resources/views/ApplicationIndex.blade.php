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
	<script>
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
	</script>
</head>
<body>
	<div class="container">
		<br><h1 style="text-align: center;">Danh sách</h1>
		
		<form action="" id="form" method="POST">
			{{ csrf_field() }}
			<input type="text" name="create" id="create"><br><br>
			<button type="submit" class="btn btn-primary">Thêm</button>
		</form>
		<table class="table table-hover"  id="example">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="body">
				@php
					$i =0;
				@endphp
				@foreach ($names as $name)
					@php
						$i++;
					@endphp					
					<tr id="tr-{{ $name->id }}">
						<td>@php
							echo $i;
						@endphp</td>
						<td id="td-{{ $i }}">{{ $name->name }}</td>
						<td>
							<a href="{{ route('todo.show', $name->id) }}"><button class="btn btn-info">Xem</button></a>
							<a href="{{ route('todo.edit', $name->id) }}"><button class="btn btn-success">Sửa</button></a>
							<button class="btn btn-danger" data-id="{{ $name->id }}">Xóa</button></a>
						</td>
					</tr>
				@endforeach				
			</tbody>
		</table>
	</div>
	<script>
		$(document).ready(function() {
			$('#form').submit(function(event) {
				event.preventDefault();
					// alert('dđ');
				$.ajaxSetup({
					headers:{
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				var id = {{ $i }}
				var nameUpdate = $('#name').val();
				var name = $('#create').val();
				$.ajax({
					url: '{{ route('todo.create') }}',
					type: 'POST',
					dataType: 'json',
					data: {'name': name},
				})
				.done(function() {
					console.log("success");					
					toastr.success('Cập nhật thông tin thành công.');
					document.getElementById("name").innerHTML = nameUpdate;
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});				
			});
		});
		$(function(){
			$('.btn-danger').click(function(){
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
						url: 'todo/' +id,
						success: function(data){
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
</body>
</html>