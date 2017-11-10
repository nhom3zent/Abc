<?php
    session_start();


        include_once('connection.php');
        $result = mysqli_query($conn, 'SELECT * FROM users');
        while ($row= $result->fetch_assoc()) {
            echo $row['email']."<br>";
            echo $row['password']."<br>";
            

            // if ($user == $row['email'] && $pwd == $row['password']) {
            //     $_SESSION['login'] = $row;
            //     header('Location:indexBT.php');
            // }
            // else{
            //     echo "Đăng nhập thất bại.";
            // }
        }
  
?>