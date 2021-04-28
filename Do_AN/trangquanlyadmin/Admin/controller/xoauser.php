<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
include('../connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id = $id";
mysqli_query($con, $sql);
header('Location: ../nguoi_dung.php');
?>
</body>
</html>