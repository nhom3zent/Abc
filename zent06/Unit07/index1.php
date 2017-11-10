<?php 
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$conn= mysqli_connect('localhost','root','','blog');
		$conn->set_charset('utf-8');
		$result = mysqli_query($conn, 'select count(id) as title from users');
		$row = mysqli_fetch_assoc($result);
		// print_r($row);
		$tong_id = $row['title'];
		// echo $tong_id;
		$limit = 10;
		$trang_ht = isset($_GET['page']) ? $_GET['page'] :1;
		// echo $trang_ht;
		$tong_trang = ceil($tong_id / $limit);
		// echo $tong_trang;
		if ($trang_ht > $tong_trang) {
			$trang_ht = $tong_trang;
		}else if ($trang_ht<1) {
			$trang_ht = 1;
		};
		$batdau = ($trang_ht -1)* $limit;
		// echo $batdau;
		$result1 = mysqli_query($conn, "SELECT * FROM users LIMIT $batdau, $limit");
		// var_dump($result1);die;
	 ?>
	<div class="example">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center;">DANH SÁCH NGƯỜI DÙNG</h2>
                <a href="1.php" class="btn btn-primary">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>                    
                    <?php 
                        while ($row = $result1->fetch_assoc()) {                      
                     ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                        <!-- <a href="detail07.php?page=<?php echo $current_page; ?>&id=<?php echo $row['id'] ?>" class="btn btn-success">Detail</a> -->
                        <a href="detail07.php?page=<?php echo $trang_ht; ?>&id=<?php echo $row['id']; ?>" class="btn btn-success">Detail</a>
                        <a href="update07.php?page=<?php echo $trang_ht; ?>&id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="delete07.php?page=<?php echo $trang_ht; ?>&id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>  
                    <?php } ?>
                </table>
            </div>
        </div>         
    </div>
    <div>
    <?php 
    	if ($trang_ht>1 && $tong_trang>1) {    
    		echo '<a href="index1.php?page='.($trang_ht-1).'">Pre</a> | ';		
   		}
    	for ($i=1; $i <= $tong_trang; $i++) { 
    		if ($i == $trang_ht) {
    			echo $i." | ";    		
    		}elseif ($i!=$trang_ht) {
    			echo '<a href="index1.php?page='.($i).'">'.$i.'</a> | ';
    		}
    	}
    	if ($trang_ht<$tong_trang && $tong_trang>1) {
    		echo '<a href="index1.php?page='.($trang_ht+1).'">Next</a>';
    	}
    ?>

    </div>
</body>
</html>