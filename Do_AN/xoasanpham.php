<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
  if(isset($_GET['ma_sp'])) {
	  $id = $_GET['ma_sp'];
	 //xoa san pham trong gio hang
	 unset($_SESSION['cart'][$id]);  
  } else {
	  //xoa toan bo gio hang
 	  unset($_SESSION['cart']);
  }
 
 header('Location:gh.php');
?>
</body>
</html>