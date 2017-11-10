<?php
    session_start();
    // session_destroy();die;
    echo "<pre>";
    print_r($_SESSION['thongtin42']);
    echo "</pre>";
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
                <h2 style="text-align: center;">DANH SÁCH NGƯỜI DÙNG</h2>
                <a href="BTVN04_2.php" class="btn btn-primary">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã Sinh Viên</th>
                            <th>Họ Tên</th>
                            <th>Action</th>
                        </tr>
                    </thead>                    
                
                <?php
                    $i = 0;
                    foreach ($_SESSION['thongtin42'] as $key => $value) {
                        $i++;
                ?>
                    <tr>

                        <td><?php echo $i; ?></td>     
                        <td><?php echo $value['code']; ?></td>     
                        <td><?php echo $value['name']; ?></td>     
                        <td>
                            <a href="detai42.php?code=<?php echo $value['code']; ?>" class="btn btn-success" name="detai">Detail</a>
                            <a href="delete42.php?code=<?php echo $value['code']; ?>" class="btn btn-danger">Delete</a>
                        </td>      
                    </tr>  
                <?php } ?>
                </table>
            </div>
        </div>
         
    </div>
</body>
</html>