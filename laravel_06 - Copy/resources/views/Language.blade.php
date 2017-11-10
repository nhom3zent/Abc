<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>
	<form action="" method="POST" role="form">
		<legend>Form title</legend>
	
		<div class="form-group">
			<label>label</label>
			<select name="language" id="language">
				<option value="en" @if(App::getLocale()=='en') selected @endif>English</option>
				<option value="vi" @if(App::getLocale()=='vi') selected @endif>VietNamese</option>
				<option value="cn"  @if(App::getLocale()=='cn') selected @endif>China</option>
				<option value="">Japan</option>
			</select>	
		</div>
		<h2>@lang ('language.hello')</h2>
		<h2>@lang ('language.world')</h2>
	</form>
	<script>
		$('#language').change(function() {
			var selected = $(this).val();
			// alert(selected);
			window.location.href="language/"+selected;
		});
	</script>
</body>
</html>