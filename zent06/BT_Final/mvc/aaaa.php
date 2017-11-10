<?php 
    // include_once('connection.php');
 $conn = new mysqli('localhost','root','','blog');
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <hr>
        <form action="" method="POST" role="form">
            <input type="hidden" name='id' value=''>
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name" value="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email" >
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="" placeholder="Nhập mật khẩu" name="password" >
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="mobile" value="">
            </div>  
            <div class="form-group">
                <label for="">Giới tính </label><br>
                <input type="radio" name="gender" value="1"> Male
                <input type="radio" name="gender" value="0" > Female
                <input type="radio" name="gender" value="2"> Other
            </div>
             <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>
<?php 
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']); 
        $query = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";

        // $query = "UPDATE users SET name='$name', mobile='$mobile', email='$email', password='$password', gender='$gender', address='$address' where id = '$id'";
        $result = $conn->query($query);

        // var_dump($result);die;
    // header('Location: index08.php');
    }
?>
