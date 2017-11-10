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
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/sweetalert.min.js') }}"></script>
	<script src="{{ asset('js/toastr.min.js') }}"></script>
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
</head>
<body>
	<form action="{{ route('blog.store') }}" method="POST" role="form" enctype="multipart/form-data" id="form">
		<legend>Form title</legend>
		{{-- @if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</div>
		@endif --}}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
			@if($errors->has('title'))
				<p style="color: blue">{{ $errors->first('title') }}</p>
			@endif
		</div>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" id="image" name="image" class="form-control" id="image">
		
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<textarea class="form-control" name="description" id="description" cols="30" rows="4">{{ old('description') }}</textarea>
			@if($errors->has('description'))
				<p style="color: blue">{{ $errors->first('description') }}</p>
			@endif
		</div>
		<div class="form-group">
			<label for="">Content</label>
			<textarea class="form-control" name="content" id="content" cols="30" rows="4">{{ old('content') }}</textarea>
			{{-- @if($error->has('content'))
				<p style="color: blue">{{ $error->first('content') }}</p>
			@endif --}}
		</div>
		<div class="form-group">
			<label for="">User_ID</label>
			<select name="user_id" id="user_id">
				@foreach ($users as $user)
					<option value="{{ $user->id }}">
						{{ $user->name }}
					</option>
				@endforeach
			</select>

		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<script>
		CKEDITOR.replace('description');
		CKEDITOR.replace('content');
	</script>
	{{-- <script>
		$('#form').on('submit', function(e){
			e.preventDefault();
			$('#form').validate({
				rules:{
					title:{
						required: true,
						minlength: 10
					},
					description: "required"
				}
			});
		});
		
	</script> --}}
	{{-- <script src="" type="text/javascript" charset="utf-8" async defer>
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
	</script> --}}
	{{-- <script>
	$(document).ready(function() {
		$('#form').submit(function(e){
			e.preventDefault();
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			var title = $('#title').val();
			var description = $('#description').val();
			var content = $('#content').val();
			var user_id = $('select[name=user_id]').val();
			$.ajax({
				url: '{{ route('blogs1.store') }}',
				type: 'POST',
				dataType: 'JSON',
				data: {'title': title, 'description':description,'content':content,'user_id':user_id},
				
			})
			.done(function() {
				console.log("success");
				toastr.success('Bạn tạo mới thành công.');
				setTimeout(function(){ 
					 location.href = 'http://laravel.zent/blogs1';
				}, 1000);
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		})
	});

	</script> --}}
</body>
</html>