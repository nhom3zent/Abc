<?php 
    include_once('connection.php');
    $id = $_GET['id'];
    $query = "select * from users where id =".$id;
    $resuft =$conn->query($query);
    $info = $resuft->fetch_assoc();

    $male = '';
    $female = '';
    $other = '';

    if ($info['gender'] == 1) {
        $male = 'checked';
    } else if($info['gender']  == 0){
        $female = 'checked'; 
    }else {
        $other = 'checked';
    }
 ?>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <hr>
        <form action="" method="POST" role="form">
            <input type="hidden" name='id' value='<?php echo $info['id']; ?>'>
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name" value="<?php echo $info['name']; ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email" value="<?php echo $info['email']; ?>">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="" placeholder="Nhập mật khẩu" name="password" >
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="mobile" value="<?php echo $info['mobile']; ?>">
            </div>  
            <div class="form-group">
                <label for="">Giới tính </label><br>
                <input type="radio" name="gender" value="1" <?php echo $male; ?>> Male
                <input type="radio" name="gender" value="0" <?php echo $female; ?>> Female
                <input type="radio" name="gender" value="2" <?php echo $other; ?>> Other
            </div>
             <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address" value="<?php echo $info['address']; ?>">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
<?php 
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $gender = $_POST['gender'];
        $address = $_POST['address'];   

        $query = "UPDATE users SET name='$name', mobile='$mobile', email='$email', password='$password', gender='$gender', address='$address' where id = '$id'";
        $result = $conn->query($query);

        // var_dump($result);die;
        header('Location:indexBT.php');
    }
?>
