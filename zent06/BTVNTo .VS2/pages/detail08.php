<?php 
    include_once('connection.php');
    $id = $_GET['id'];
    $query = "select * from users where id =".$id;
    $resuft =$conn->query($query);
    $info = $resuft->fetch_assoc();

 ?>
 <?php 
    include_once('header.php');
 ?>
 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
           <h2 style="text-align: center;">Thông tin sinh viên</h2>
            <div>
            <a href="indexBT.php?page=<?php echo $_GET['page']; ?>" class='btn btn-warning'>Quay Lại</a>        
                <ul>
                    <li>ID: <?php echo $info['id']; ?></li>
                    <li>Name: <?php echo $info['name']; ?></li>
                    <li>Email: <?php echo $info['email']; ?></li>
                    <li>Phone: <?php echo $info['mobile']; ?></li>
                    <li>Birthday: <?php echo $info['birthday']; ?></li>
                    <li>Address: <?php echo $info['address']; ?></li>
                </ul>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
 <?php 
    include_once('footer.php');
?>
        

