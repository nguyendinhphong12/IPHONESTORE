<?php
  $con = mysqli_connect('localhost', 'root', '', 'ban_dien_thoai');
  mysqli_query($con,'set names utf8');
  $sql = 'select * from san_pham';
  $rs = mysqli_query($con, $sql);
?>

<?php 
$con = mysqli_connect('localhost','root','','ban_dien_thoai');
	$hang_sp = $_POST['hang_sp'];
	$ten_sp = $_POST['ten_sp'];
	$gia_sp = $_POST['gia_sp'];
	$chi_tiet = $_POST['chi_tiet'];
	$mau_sp = $_POST['mau_sp'];
	$ghi_chu = $_POST['ghi_chu'];
	$ngay_sx = $_POST['ngay_sx'];
	$anh = $_POST['anh_sp'];
	$ngay_nhap = $_POST['ngay_nhap'];
 $sql = "INSERT INTO `san_pham`(`hang_sp`, `ten_sp`, `gia_sp`, `chi_tiet`, `mau_sp`, `ghi_chu`, `ngay_sx`, `anh_sp`, `ngay_nhap`) VALUES ('$hang_sp','$ten_sp','$gia_sp','$chi_tiet','$mau_sp','$ghi_chu','$ngay_sx','$anh','$ngay_nhap')";
	mysqli_query($con,$sql);
 	// header("location:quanlysanpham.php");


?>