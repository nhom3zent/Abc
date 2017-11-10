<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
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
<div class="container">	
	<table class="table table-hover">
		<a href="{{ route('blogs.create') }}" ><button>Them</button></a>
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Image</th>
				<th><p style="width: 100px;">Description</p></th>
				<th>Content</th>
				<th>User_id</th>
				<th>Create_at</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($blogs as $value)
				
				<tr id="tr-{{ $value->id }}">
					<td>{{ $value->id }}</td>
					<td>{{ $value->title }}</td>
					<td ><img class="img-responsive" src="{{asset($value->image)}}" alt="" style="width: 200px; height: 200px;"></td>
					<td style="width: 300px;">{!! $value->description !!}</td>
					<td>{!! $value->content !!}</td>
					<td>
						@foreach ( $users as $value1)
							@if ($value1->id == $value->user_id)
								{{ $value1->name }}
							@endif
						@endforeach
					</td>
					<td>{{ $value->created_at->format('d/m/Y') }}</td>
					<td>
						<a href="{{ route('blog.show',$value->id) }}"><button class="btn btn-xs btn-info">Show</button></a>
						<a href="{{ route('blog.edit', $value->id) }}"><button class="btn btn-xs btn-danger">Edit</button></a>
						{{-- <form data-id="{{ $blogs1->id }}" class="delete" style = "display:inline-block;" method="post" action="{{ route('blogs1.delete', $value->id) }}">
							<input type="hidden" name="_method" value='DELETE'>
							{{ csrf_field() }}
						</form> --}}

						<button data-id="{{ $value->id }}" type="submit" class="btn btn-xs btn-warning">Delete</button>
					</td>
				</tr>
			@endforeach
			
		</tbody>
	</table>
</div>	
</body>
	<script>
		$(function(){
			$('.btn-warning').click(function(){
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
						url: 'blog/' +id,
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
