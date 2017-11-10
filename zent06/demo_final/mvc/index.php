<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Class phân trang đơn giản - phpandmysql.net</title>
<style type="text/css">
*{margin:0px;padding:0px}
body{padding:20px 10px; font:15px "Courier New", Courier, monospace}
h3,hr,p{margin-bottom:15px}
#pagination{width:700px; margin-top:15px; text-align:center}
#pagination a, span.current{ text-decoration:none; padding:0px 10px; border:1px solid #CCC; border-radius:3px; margin-right:3px; color:#090;font-size:13px}
span.current{ color:#F00; font-weight:bold}
td{border:1px solid #333; padding:3px 5px}
tr.title td{height:22px;font-weight:normal;text-align:center;background:#333;color:#FFF}
.red{color:#F00}
</style>
</head>

<body>
<?php require("libraries/config.php"); // gọi file config.php ?>
<?php require("libraries/database.php"); // gọi file database.php ?>
<?php require("libraries/user.php"); // gọi class User ?>
<?php require("libraries/pagination.php"); // gọi file pagination.php ?>
<h3>CLASS PAGINATION BASIC</h3>
<p>Học php tại phpandmysql.net</p>
<hr />
<?php
$Pagination = new Pagination();
$User = new User(); // Khởi tạo class User

$limit = $Pagination->limit; // Số record hiển thị trên một trang
$stat = $Pagination->start(); // Vị trí của record
$totalRecord = $User->totalRecord(); // Tổng số user có trong database
$totalPages = $Pagination->totalPages($totalRecord); // Tổng số trang tìm được

$listUsers = $User->listUsers($stat, $limit); // List user
?>
<table width="822" border="0">
  <tr class="title">
    <td width="28">Stt</td>
    <td width="155">name</td>
    <td width="223">email</td>
    <td width="55">mobie</td>
    <td width="202">gender</td>
    <td width="35">password</td>
    <td width="36">Del</td>
  </tr>
  <?php $stt = 1; ?>
  <?php foreach($listUsers as $items){ ?>
  <tr>
    <td><?php echo $stt; ?></td>
    <td><?php echo $items['name']; ?></td>
    <td><?php echo $items['email']; ?></td>
    <td><?php echo $items['mobile']; ?></td>
    <td><?php if($items['gender'] == 1){ echo "Nam";}else{ echo "Nữ"; }?></td>
    
    <td><?php echo $items['password']; ?></td>
    <td><a href="#">Sửa</a></td>
    <td><a href="#">Xóa</a></td>
  </tr>
  <?php $stt++; } ?>
</table>

<!-- List phân trang -->
<div id="pagination">
<?php echo $Pagination->listPages($totalPages); ?>
</div>

</body>
</html>