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
</head>
<body>
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <form action="{{-- {{ route('loginblog') }} --}}" method="POST" role="form" id="form">
                <legend>Đăng Nhập</legend>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Email Đăng Nhập</label>
                    <input type="text" class="form-control" id="" name="email" placeholder="Email Đăng Nhập">
                </div>
                <div class="form-group">
                    <label for="">Mật Khẩu</label>
                    <input type="password" class="form-control" name="password" id="" placeholder="Mật Khẩu">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <button type="submit" class="btn btn-primary">Đăng Nhập</button>
            </form>
        </div>
    </div> 
  {{--  @php
       foreach ($users as $user) {
           echo $user->email;
       }
        
    @endphp --}}
    <script>
        $('#form').click(function(event) {
            event.preventDefault();
            var email = $('email').val();
            var password = $('password').val();
            
        });
    </script>
</body>
</html>
