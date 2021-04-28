<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
//trong session, shopping cart se duoc luu nhu mot mang 
//ket hop (key-value). key la ma san pham. value la 
//so luong san pham

//lay id tu trang san pham truyen sang
$id = $_GET['ma_sp'];
$soluong = 0;

//truong hop san pham da co trong gio hang
if(isset($_SESSION['cart'][$id])) {
	$soluong = $_SESSION['cart'][$id] + 1;
} else { //truong hop san pham chua co trong gio hang
	$soluong = 1;
}
//cap nhat lai so luong san pham
$_SESSION['cart'][$id] = $soluong;

print_r($_SESSION['cart']);
header('location:gh.php');
?>
</body>
</html>