<?php 
	session_start();
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
                <h2 style="text-align: center;">DANH SÁCH SẢM PHẨM</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sản Phẩm</th>
                            <th>Giá Tiền</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php 
                    	foreach ($_SESSION['cart'] as $key => $value) {
                    	
                     ?>
                    <tr>
                    	<td><?php echo $value['ID']; ?></td>
                    	<td><?php echo $value['sp']; ?></td>
                    	<td><?php echo $value['gia']; ?></td>
                    	<td><a href="xuly.php?id=<?php echo $value['ID']; ?>" class="btn btn-success" name="click">Thêm</a></td>
                    </tr>
                    <?php } ?>
                    <a href="viewcart.php" class="btn btn-primary">Xem giỏ hàng</a>
                </table>
            </div>
        </div>         
    </div>
</body>
</html>