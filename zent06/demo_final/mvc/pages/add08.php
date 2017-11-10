<?php
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6LeJgCkUAAAAADUjn9iuNWPafe1hanbS7nU_pbXt';
$secret_key  = '6LeJgCkUAAAAAIY8zyhP0B-yjOCYK0kMFMeau1BH';
  

?>

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
                        echo 'Captcha không đúng';
                    }
                    if($response->success == true){
                        // echo "đúng";      session_start();
                         // session_destroy();die;
                            $infodm = array(
                                'name' => $_POST['name'],
                                'password' => $_POST['password'],
                                'mobile' => $_POST['mobile'],
                                'email' => $_POST['email'],
                                'gender' => $_POST['gender'],
                                'address' => $_POST['address'], 
                            );
                        
                            $_SESSION['thongtin']= $infodm;
                            
                            $name = $_SESSION['thongtin']['name'];
                            $mobile = $_SESSION['thongtin']['mobile'];
                            $email = $_SESSION['thongtin']['email'];
                            $password = md5($_SESSION['thongtin']['password']);
                            $gender = $_SESSION['thongtin']['gender'];
                            $address = $_SESSION['thongtin']['address'];
                            
                            $query = "INSERT INTO users(id,name,mobile,email,password,gender,address) values('','$name','$mobile', '$email', '$password', '$gender', '$address')";
                            $result = $conn->query($query);
                                
                                function send_email($email_recive,$name,$contents,$subject ){
                                    //https://www.google.com/settings/security/lesssecureapps
                                    // Khai báo thư viên phpmailer
                                    require "phpmailer/PHPMailerAutoload.php";
                                    require "phpmailer/class.phpmailer.php";
                                    // Khai báo tạo PHPMailer
                                    $mail = new PHPMailer();
                                    //Khai báo gửi mail bằng SMTP
                                    $mail->IsSMTP();
                                    //Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
                                    // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
                                    // 1 = Thông báo lỗi ở client
                                    // 2 = Thông báo lỗi cả client và lỗi ở server
                                    // To load the French version
                                    $mail->setLanguage('vi', '/optional/path/to/language/directory/');
                                    $mail->SMTPDebug  = 0;
                                    $mail->CharSet="UTF-8";
                                    $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
                                    $mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
                                    $mail->Port       = 587; // cổng để gửi mail
                                    $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
                                    $mail->SMTPAuth   = true; //Xác thực SMTP
                                    $mail->Username   = "auto.zentgroup@gmail.com"; // Tên đăng nhập tài khoản Gmail
                                    $mail->Password   = "1@3$5^7*"; //Mật khẩu của gmail
                                    $mail->SetFrom("zentgroup@gmail.com", "Zent Group"); // Thông tin người gửi
                                    $mail->AddReplyTo("taquang22@gmail.com","Tạ Đăng Quảng");// Ấn định email sẽ nhận khi người dùng reply lại.
                                    $mail->AddAddress($email_recive, $name);//Email của người nhận
                                    $mail->Subject = $subject; //Tiêu đề của thư
                                    $mail->MsgHTML($contents); //Nội dung của bức thư.
                                    // $mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
                                    // Gửi thư với tập tin html
                                    $mail->AltBody = "Nội dung thư";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
                                    //$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach
                                     
                                    //Tiến hành gửi email và kiểm tra lỗi
                                    if(!$mail->Send()) {
                                     // echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
                                        return false;
                                    } else {
                                        return true;
                                      //echo "Đã gửi thư thành công!";
                                    }
                                }
                                send_email($email,$name,'Bạn đã đăng ký thành công lớp học','PHP 06');
                                header('Location:indexBT.php');                             
                    }else{
                        echo 'Captcha không đúng';
                    }
                }
             ?>
            <div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div>
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
   