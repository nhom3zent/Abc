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
    
    
</head>
    <body>
        
        <div class="container" style=" width: 150%">
            <h2 align="center">DANH SÁCH NGƯỜI DÙNG</h2>
            <a href="index.php?mod=tag&act=create" class="btn btn-primary">Thêm mới</a>
            <p> 
                <?php 

                    if (isset($_COOKIE['name'])) {
                        echo  $_COOKIE['name'];
                    }
                ?>                
            </p>
            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Post_ID</th>
                    <th>Action</th>
                  </tr>
                  
                </thead>
                <tbody>
                <?php 
                    foreach ($data as  $value) {              
                 ?>
                  <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['post_id']; ?></td>
                    <td>
                        <a href="index.php?mod=tag&act=show&id=<?php echo $value['id'] ?>" class="btn btn-success">Detail</a> 
                         <a href="index.php?mod=tag&act=edit&id=<?php echo $value['id'] ?>" class="btn btn-warning">Update</a>  
                        <a href="index.php?mod=tag&act=delete&id=<?php echo $value['id'] ?>" name='delete' class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="pagination">
          
        </div>
    </body>
</html>