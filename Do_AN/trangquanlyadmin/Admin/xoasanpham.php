<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
include('connect.php');
$ma_sp = $_GET['ma_sp'];
$sql = "DELETE FROM san_pham WHERE ma_sp = $ma_sp";
mysqli_query($con, $sql);
header('Location: quanlysanpham.php');
?>
</body>
</html>