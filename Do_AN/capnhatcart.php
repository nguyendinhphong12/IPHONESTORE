<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
	if(isset($_POST['txtsoluong'])) {
		foreach($_POST['txtsoluong'] as $k=>$v) {
		  if($v == 0 || !is_numeric($v)) {
			 //xoa san pham
			 unset($_SESSION['cart'][$k]);  
		  } else if($v > 0 && is_numeric($v)) {
			  $_SESSION['cart'][$k] = $v;
		  }
		}
	}
	//quay ve trang gio hang
	header('Location: gh.php');
?>
</body>
</html>
