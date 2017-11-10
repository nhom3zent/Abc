<?php 
	session_start();

 	date_default_timezone_set("Asia/Ho_Chi_Minh");
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap 3 Simple Tables</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .example{
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="example">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center;">Thông tin sản phẩm</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sản Phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá Tiền</th>
                            <th>Thành tiền</th>
                            <th>Thời gian</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <?php 
                    $tong = 0;
                    	foreach ($_SESSION['giohang'] as $key => $value) {
                    		    $tong = $tong + $value['thanhtien'];

                     ?>
                    <tr>
                    	<td><?php echo $value['ID']; ?></td>
                    	<td><?php echo $value['name']; ?></td>
                    	<td><?php echo $value['soluong']; ?></td>
                    	<td><?php echo $value['gia']; ?></td>
                    	<td><?php echo $value['thanhtien']; ?></td>
                    	<td><?php echo  date("d/m/Y H:i:s"); ?></td>
                    	<td><a href="deletecart.php?id=<?php echo $value['ID']; ?>" class="btn btn-success">Xóa khỏi giỏ hàng</a></td>
                    </tr>
                    <?php } ?>
                    <a href="cart2.php" class="btn btn-primary">Tiệp tục mua hàng</a>
                </table>
                <span>Tổng số tiền cần thanh toán là: <?php echo $tong; ?></span>
            </div>
        </div>
         
    </div>
</body>
</html>