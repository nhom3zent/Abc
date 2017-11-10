<?php 
    include_once('connection.php');
    $id = $_GET['id'];
    $query = "select * from users where id =".$id;
    $resuft =$conn->query($query);
    $info = $resuft->fetch_assoc();

 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <style>
        div{
            margin-left: 200px;
        }
        .mail-field{
            width: 70%; 
        }
    </style>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
</head>
<body>
        <h2 style="text-align: center;">Thông tin sinh viên</h2>
        <div>
      
        
            <ul>
                <li>ID: <?php echo $info['id']; ?></li>
                <li>Name: <?php echo $info['name']; ?></li>
                <li>Email: <?php echo $info['email']; ?></li>
                <li>Phone: <?php echo $info['mobile']; ?></li>
                <li>Birthday: <?php echo $info['birthday']; ?></li>
                <li>Address: <?php echo $info['address']; ?></li>
            </ul>
        
        </div>
</body>
</html>
