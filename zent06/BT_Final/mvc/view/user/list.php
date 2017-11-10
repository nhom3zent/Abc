
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
</head>
    <body >
        <div class="container" style=" width: 150%">
            <div>
                <h2 align="center">DANH SÁCH NGƯỜI DÙNG</h2>
                <a href="index.php?mod=user&act=create" class="btn btn-primary">Thêm mới</a>
                <div id="table1">
                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Action</th>
                          </tr>
                          
                        </thead>
                        <tbody>
                        <?php 
                            $page = isset($_GET['page'])?$_GET['page']:'1';
                            foreach ($data as  $value) {              
                         ?>
                          <tr>
                            <td><?php echo $value['id']; ?></td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['email']; ?></td>
                            <td><?php echo $value['gender']; ?></td>
                            <td>
                                <a href="index.php?mod=user&act=show&id=<?php echo $value['id'] ?>" class="btn btn-success">Detail</a> 
                                <a href="index.php?mod=user&act=edit&id=<?php echo $value['id'] ?>" class="btn btn-warning">Update</a>  
                                <a href="index.php?mod=user&act=delete&id=<?php echo $value['id'] ?>&page=<?php echo $page ?>" name='delete' class="btn btn-danger">Delete</a>

                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="pagination">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            
           ?>
        </div>
    
    </body>
</html>