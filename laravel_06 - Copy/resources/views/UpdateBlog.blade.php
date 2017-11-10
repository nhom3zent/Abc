
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
	<link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/sweetalert.min.js') }}"></script>
	<script src="{{ asset('js/toastr.min.js') }}"></script>
</head>
<body>
<div class="">
	<form action="" method="POST" role="form" enctype="multipart/form-data" id="form">		
		<legend>Form title</legend>
		<input type="hidden" value="{{ $blogs->id }}">
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $blogs->title }}">
		</div>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="image" class="form-control" id="image" value="">
			<img style="width: 200px; height: 200px;" src="{{ asset($blogs->image) }}" id="blah" alt="">
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<textarea class="form-control" name="description" id="description" cols="30" rows="4">{{ $blogs->description }}</textarea>
		</div>
		<div class="form-group">
			<label for="">Content</label>
			<textarea class="form-control" name="content" id="content" cols="30" rows="4">{{ $blogs->content }}</textarea>
		</div>
		<div class="form-group">
			<select name="user_id" id="user_id">
				@foreach ($users as $value)
					<option value="{{ $value->id }}" 
						@if($blogs->user_id == $value->id) selected @endif
					>
						{{ $value->name }}
					</option>
				@endforeach

			</select>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>	
	<script src="" type="text/javascript" charset="utf-8" async defer>
		function readURL(input) {

		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#blah').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
			}
		}

			$("#image").change(function(){
			    readURL(this);
			});
	</script>
	<script>
		$(document).ready(function() {
			$('#form').submit(function(event) {
				event.preventDefault();
				$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});
				alert('ddđ');
				var title = $('#title').val();
				var description = $('#description').val();
				var content = $('#content').val();
				var user_id = $('#user_id').val();
				$.ajax({
						url: '{{ route('blogs.update', $blogs->id) }}',
						type: 'PUT',
						dataType: 'JSON',
						data: {'title': title, 'description':description,'content':content,'user_id':user_id},
						
					})
				.done(function() {
					console.log("success");
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