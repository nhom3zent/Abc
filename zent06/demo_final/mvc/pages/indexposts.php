<?php 
	include_once('header.php');
 ?>
 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
			
        
            <?php 
            // PHẦN XỬ LÝ PHP
            // BƯỚC 1: KẾT NỐI CSDL
            $conn = mysqli_connect('localhost', 'root', '', 'blog');
            $conn->set_charset('utf8');
     
            // BƯỚC 2: TÌM TỔNG SỐ RECORDS
            $result = mysqli_query($conn, 'select count(id) as total from posts');
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
            $result = mysqli_query($conn, "SELECT * FROM posts LIMIT $start, $limit");
            // var_dump($result);die;
            ?>
            <div class="khung">
                <h2 align="center">DANH SÁCH BÀI ĐĂNG</h2>
                <a href="addBT.php" class="btn btn-primary">Thêm mới</a>
                <p> 
                    <?php 

                        if (isset($_COOKIE['name'])) {
                            echo  $_COOKIE['name'];
                        }
                    ?>                
                </p>
                <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                      
                    </thead>
                    <tbody>
                    <?php 
                        while ($row = $result->fetch_assoc()) {
                     ?>
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td>
                            <a href="detailposts.php?page=<?php echo $current_page; ?>&id=<?php echo $row['id'] ?>" class="btn btn-success">Detail</a> 
                             <a href="updatlposts.php?page=<?php echo $current_page; ?>&id=<?php echo $row['id'] ?>" class="btn btn-warning">Update</a>  
                            <a href="deletlposts.php?page=<?php echo $current_page; ?>&id=<?php echo $row['id'] ?>" name='delete' class="btn btn-danger">Delete</a>

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
                    echo '<a href="indexposts.php?page='.($current_page-1).'">Prev</a> | ';
                }
     
                // Lặp khoảng giữa
                for ($i = 1; $i <= $total_page; $i++){
                    // Nếu là trang hiện tại thì hiển thị thẻ span
                    // ngược lại hiển thị thẻ a
                    if ($i == $current_page){
                        echo '<span>'.$i.'</span> | ';
                    }
                    else{
                        echo '<a href="indexposts.php?page='.$i.'">'.$i.'</a> | ';
                    }
                }
     
                // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                if ($current_page < $total_page && $total_page > 1){
                    echo '<a  href="indexposts.php?page='.($current_page+1).'">Next</a> | ';
                }
               ?>
            </div>
       

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
 <?php 
 	include_once('footer.php');
?>