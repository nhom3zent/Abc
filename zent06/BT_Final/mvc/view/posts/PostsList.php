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
            <a href="index.php?mod=posts&act=create" class="btn btn-primary">Thêm mới</a>
            <p> 
                <?php 

                    
                ?>                
            </p>
            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>User_ID</th>
                    <th>Title</th>
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
                    <td><?php echo $value['user_id']; ?></td>
                    <td><?php echo $value['title']; ?></td>
                    <td>
                        <a href="index.php?mod=posts&act=show&id=<?php echo $value['id'] ?>" class="btn btn-success">Detail</a> 
                         <a href="index.php?mod=posts&act=edit&id=<?php echo $value['id'] ?>" class="btn btn-warning">Update</a>  
                        <a href="index.php?mod=posts&act=delete&id=<?php echo $value['id'] ?>&page=<?php echo $page; ?>" name='delete' class="btn btn-danger">Delete</a>

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