
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                            <form action="" method="POST" accept-charset="utf-8">
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <div>
                                <?php
                                    // session_start();
                                    // if (isset($_POST['submit'])) {
                                    //     $user = $_POST['email'];
                                    //     $pwd = md5($_POST['password']);
                                    //     if ($user == "" || $pwd =="") {
                                    //         echo "Email hoặc Password bạn không được để trống!";
                                    //     }else{
                                    //         include_once('connection.php');
                                    //         $result = mysqli_query($conn, 'SELECT * FROM users');
                                    //         while ($row = $result->fetch_assoc()) {
                                    //             if ($user == $row['email'] && $pwd == $row['password']) {
                                    //                 $_SESSION['login'] = $row['email'];
                                    //                 header('Location:indexBT.php');
                                    //             }
                                    //         }
                                            
                                    //     }
                                    // }
                                    session_start();
                                    include_once('connection.php');
                                    // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
                                    if (isset($_POST["submit"])) {
                                        // lấy thông tin người dùng
                                        $email = $_POST["email"];
                                        $password = md5($_POST['password']);
                                        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
                                        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection 
                                        
                                        $email = strip_tags($email);
                                        $email = addslashes($email);
                                        $password = strip_tags($password);
                                        $password = addslashes($password);
                                        if ($email == "" || $password =="") {
                                            echo "Email hoặc Password bạn không được để trống!";
                                        }else{
                                            $sql = "select * from users where email = '$email' and password = '$password' ";
                                            $query = mysqli_query($conn,$sql);
                                            $num_rows = mysqli_num_rows($query);
                                            if ($num_rows==0) {
                                                echo "Tên đăng nhập hoặc mật khẩu không đúng !";
                                            }else{
                                                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này              
                                                $_SESSION['email'] = $email;
                                                // Thực thi hành động sau khi lưu thông tin vào session
                                                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                                                header('Location: index.php');
                                            }
                                        }
                                    }
                                ?></div>
                                <button type="submit" name="submit" id="btn"  class="btn btn-primary orange"><strong>Đăng nhập</strong></button>                            
                                <a href="add.php">Đăng ký</a>                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>

<?php
    
?>