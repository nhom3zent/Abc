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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
</head>
    <body>
        <div class="container">
            <h2 align="center">DANH SÁCH NGƯỜI DÙNG</h2>
            <a href="index.php?mod=user&act=create" class="btn btn-primary">Thêm mới</a>          
            <table class="table table-striped table-bordered" id="example">
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
                    foreach ($date as  $value) {              
                 ?>
                  <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['gender']; ?></td>
                    <td>
                        <a href="index.php?mod=user&act=create&id=<?php echo $value['id'] ?>" class="btn btn-success">Detail</a> 
                         <a href="index.php?mod=user&act=edit&id=<?php echo $value['id'] ?>" class="btn btn-warning">Update</a>  
                        <a href="index.php?mod=user&act=delete&id=<?php echo $value['id'] ?>" name='delete' class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="pagination">
           
        </div>
     <script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    </body>
</html>
