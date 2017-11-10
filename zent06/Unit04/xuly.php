<?php 
	session_start();
	// session_destroy();die;
	$a = $_GET['id'];
	$id = $_SESSION['cart'][$a]['ID'];
	$name = $_SESSION['cart'][$a]['sp'];
	$gia = $_SESSION['cart'][$a]['gia'];
	echo $id;
	echo $name;
	echo $gia;
	$_SESSION['giohang'][$a]['ID'] = $id; 
	$_SESSION['giohang'][$a]['name'] = $name;
	$_SESSION['giohang'][$a]['gia'] = $gia;
	if (isset($_SESSION['giohang'][$a]['soluong'])) {
		$soluong = $_SESSION['giohang'][$a]['soluong'];
		$soluong++; 
	}
	else{
		$soluong = 1; 
	}
	$_SESSION['giohang'][$a]['soluong'] = $soluong; 
	$thanhtien = $soluong * $gia;
	$_SESSION['giohang'][$a]['thanhtien'] = $thanhtien;
	// die();
	echo "<pre>";
	print_r($_SESSION['giohang']);
	// die;
	header('Location:viewcart.php');
  ?>




  
<!-- a cứ gõ ở đây đi
  k nc qua mic đc à
  máy e hỏng mic rồi, mà ko có tai nghe :)))))
  ok
  a làm tới đây mà kb làm kiểu gì nữa, a lấy đc dữ liệu của 1 sp, định gán vào 1 mảng mới đẻ thêm số lượng nhưng k biết làm kiểu ý đúng k, với cả k biết gán thế nào cho đúng
  chỗ này là để anh add vào giỏ đây à
  chỗ này a đang định xử lý r mới cho sang giỏ hàng
  mấy chỗ này cứ thử test, mà chưa biết làm kiểu gì
  bây giờ anh lấy được ID rồi thì anh vào cái mảng session để lưu danh sách sản phẩm ý
  vào đấy rồi anh lấy mã, tên, giá rồi gán vào biến -->
 <!--  cái thằng session cart a đang lưu thực chất là list sản phẩm thôi
  còn cart là 1 mảng khác để lưu giỏ hàng
  đó
  vậy là anh đã lấy được thông tin của sản phẩm anh cần thêm
  giờ a lưu sản phẩm đó vào giỏ hàng
  rồi thêm số lượng với thành tiền nữa
  anh thấy không
  cái mảng giỏ hàng của anh hiện tại đã có 1 sản phẩm, số lượng 1 có thành tiền nữa rồi đấy
  được rồi đó
  giờ anh dùng vòng for để duyệt từng sản phẩm trong giỏ hàng rồi in lên bảng giỏ hàng là đc
  ok, để a thử xem, có gì mắc thì a hỏi nhé
  anh cứ hiểu là bài này nó phải là 2 danh sách
  1 danh sách là sản phẩm bình thường
  1 danh sách là giỏ hàng có những sản phẩm đã chọn
  2 cái khác nhau đó
  ok, a hiểu ý tưởng là phải thêm 1 session nữa, nhưng cứ loay hoay kb phải làm thê snaof ý
   :v thì anh cứ đặt sesion rõ ràng ra là được mà
   ví dụ :$_SESION['list']: tức là 1 mảng lưu danh sách sản phẩm
   mà với mỗi sản phẩm lại là 1 mảng thông tin nên sẽ là 

   $_SESION['list']['ID1'] = array(
   			'ID' => ma san pham,
   			'NAME' => ten sản phẩm,
   			'PRICE' => giá sản phẩm);

   ,$_SESION['list']['ID2'],...tương tự.
   viết thế này chắc anh dễ hiểu hơn
   ok
   ddeer a làm tí, r có gì mắc a hỏi nhé
   ok -->

