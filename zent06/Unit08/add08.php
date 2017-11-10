<?php
    session_start();
//cấu hình thông tin do google cung cấp
    $api_url     = 'https://www.google.com/recaptcha/api/siteverify';
    $site_key    = '6LeJgCkUAAAAADUjn9iuNWPafe1hanbS7nU_pbXt';
    $secret_key  = '6LeJgCkUAAAAAIY8zyhP0B-yjOCYK0kMFMeau1BH';
  

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script>
        .form-control{
            width: 500px !important;
        };
        .form-group{
            width:500px;
        }
    </script>
</head>
<body>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <hr>
        <form action="" method="POST" role="form" class="table">
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="" placeholder="Nhập mật khẩu" name="password">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="mobile">
            </div>  
            <div class="form-group">
                <label for="">Giới tính </label><br>
                <input type="radio" name="gender" value="1"> Male
                <input type="radio" name="gender" value="0"> Female
                <input type="radio" name="gender" value="2"> Other
            </div>
             <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address">
            </div>
            <?php 
                //kiem tra submit form
                if(isset($_POST['submit']))
                {
                    //lấy dữ liệu được post lên
                    $site_key_post    = $_POST['g-recaptcha-response'];
                      
                    //lấy IP của khach
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $remoteip = $_SERVER['REMOTE_ADDR'];
                    }
                     
                    //tạo link kết nối
                    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
                    //lấy kết quả trả về từ google
                    $response = file_get_contents($api_url);
                    //dữ liệu trả về dạng json
                    $response = json_decode($response);
                    if(!isset($response->success)){
                        echo 'Captcha khong dung';
                    }
                    if($response->success == true){
                        // echo "đúng";      session_start();
                         // session_destroy();die;
                        if (isset($_POST['submit'])) {
                            $infodm = array(
                                'name' => $_POST['name'],
                                'password' => $_POST['password'],
                                'mobile' => $_POST['mobile'],
                                'email' => $_POST['email'],
                                'gender' => $_POST['gender'],
                                'address' => $_POST['address'],
                            );
                        
                            $_SESSION['thongtin']= $infodm;
                            header('Location: add_process08.php');

                        };  
                    }else{
                        echo 'Captcha không đúng';
                    }
                }
             ?>
            <div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div>
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>
<?php 


 ?>