?php
  $con = mysqli_connect('localhost', 'root', '', 'ban_dien_thoai');
  mysqli_query($con,'set names utf8');
  $sql = 'select * from don_hang';
  $rs = mysqli_query($con, $sql);
?>

<?php 
$con = mysqli_connect('localhost','root','','ban_dien_thoai');
	$ma_dh = $_POST['ma_dh'];
	$ten_loai = $_POST['ten_loai'];
	$ten_kh = $_POST['ten_kh'];
	$dchi = $_POST['dchi'];
	$ngay_dat = $_POST['ngay_dat'];
	$email = $_POST['email'];
	$sdt_kh = $_POST['sdt_kh'];
	$trang_thai = $_POST['trang_thai'];
	
$sql = "INSERT INTO `don_hang`(`ma_dh`, `ten_loai`, `ten_kh`, `dchi`, `ngay_dat`, `email`, `sdt_kh`, `trang_thai`) VALUES ('$ma_dh','$ten_loai','$ten_kh','$dchi','$ngay_dat','$email','$sdt_kh','$trang_thai')";
mysqli_query($con,$sql);
header("location:user/giohang.php");


?>