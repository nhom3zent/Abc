@php
	session_start();
	// session_destroy();
@endphp
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
	@php		
		$a = 0;
	@endphp
	@foreach ($users as $user)
		@if ($data['email']== $user->email && $data['password']== $user->password  )
			@php				
				$_SESSION['ttin']['email'] = $data['email'];
				$_SESSION['ttin']['password'] = $data['password'];
				echo "<pre>";
				var_dump($_SESSION);
				$b = 1;				
			@endphp
		@endif
		@if ($data['email']!= $user->email || $data['password']!= $user->password  )
			@php
				$b = 0;			
			@endphp
		@endif
		@php
			$a = $a +$b;
		@endphp
	@endforeach
	<script>
		@if ($a==1)
			toastr.success('Đăng nhập thành công.');
			setTimeout(function(){ 
				location.href = 'http://laravel.zent/blog';
			}, 1000);
		@endif
		@if ($a==0)
			toastr.success('Đăng nhập thất bại.');
			setTimeout(function(){ 
				location.href = 'http://laravel.zent/login';
			}, 1000);
		@endif
	</script>
</body>
</html>