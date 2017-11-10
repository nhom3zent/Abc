<?php 
if (isset($_COOKIE['name'])) {
        echo "Ten cua ban la <b>".$_COOKIE['name']."</b>";
    }
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
        <?php 
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
        $conn = mysqli_connect('localhost', 'root', '', 'blog');
        $conn->set_charset('utf8');
 
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(id) as total from users');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
        // die($limit);
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
        // echo $start;
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $result = mysqli_query($conn, "SELECT * FROM users LIMIT $start, $limit");
        // var_dump($result);die;
        ?>
        <div class="container">
            <h2 align="center">DANH SÁCH NGƯỜI DÙNG</h2>
            <a href="index.php?mod=posts&act=create" class="btn btn-primary">Thêm mới</a>
            <<!-- ?php if (isset($a)) {
                echo $a;
                } 
                echo $a;
            ?>  -->      
            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>user_id</th>
                    <th>Title</th>
                    <th>Action</th>
                  </tr>
                  
                </thead>
                <tbody>
                <?php 
                    foreach ($data as  $value) {              
                 ?>
                  <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['user_id']; ?></td>
                    <td><?php echo $value['title']; ?></td>
                    <td>
                        <a href="index.php?mod=posts&act=show&id=<?php echo $value['id'] ?>" class="btn btn-success">Detail</a> 
                         <a href="index.php?mod=posts&act=edit&id=<?php echo $value['id'] ?>" class="btn btn-warning">Update</a>  
                        <a href="index.php?mod=posts&act=delete&id=<?php echo $value['id'] ?>" name='delete' class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="pagination">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?page='.($current_page+1).'">Next</a> | ';
            }
           ?>
        </div>
    </body>
</html>