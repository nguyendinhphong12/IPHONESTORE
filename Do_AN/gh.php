<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang giỏ hàng</title>
<link rel="stylesheet" type="text/css" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <?php
  include "modules/menu.php";
  ?>
  
<?php
$con = mysqli_connect('localhost', 'root', '', 'ban_dien_thoai');
mysqli_query($con,'set names utf8');
//bien kiem tra xem session co bi trong hay khong
$isempty = 0;
if(isset($_SESSION['cart'])) {
  //lay ra mot mang cac san pham trong gio hang
  $list = $_SESSION['cart'];
  //lay ve tong so san pham trong gio hang
  $somathang = count($list);
  
  if($somathang == 0) {
    echo '<h3><b>Giỏ hàng trống !</b></h3>';   
  } else {
      
    
    foreach($_SESSION['cart'] as $k=>$v) {
    if(isset($k)) {
      $isempty = 1; //gio hang co san pham        
    } 
    $item[] = $k;
     }
     //chuyen mang thanh chuoi
     $str = implode(',', $item);
     $sql = "select * from san_pham where ma_sp in ($str)";
     $result = mysqli_query($con, $sql);
     $tonggiatri = 0;
     ?>
       <div class="container">
        <h2 align="center"><b>GIỎ HÀNG CỦA BẠN</b></h2><br><br>
      <form method="post" action="">         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>tên sản phẩm </th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Hình ảnh</th>
        <th>Tổng giá trị</th>
        <th>màu</th>
        <th>loại máy</th>
        <th>Xóa</th>
      </tr>
       
      <?php
          $result = mysqli_query($con, $sql);
          if ($result) {
          while($row = mysqli_fetch_assoc($result)) {
          $soluong = $_SESSION['cart'][$k];
          $gia = $row['gia_sp'];
          $giatri =  $soluong * $gia;
          //tinh tong gia tri gio hang
          $tonggiatri += $giatri;
      ?>
    <tr>
        <td><?php echo $row['ten_sp'];?></td>
        <td><?php echo number_format("$gia",0,",","."); ?></td>
        <td><input type="number"  min="0" max="100" name="" value="<?php echo $soluong; ?>" size="3" /> </td>
        <td><img src="<?php echo $row['anh_sp'];?>" width="50px" height="50px"/></td>
        <td><?php echo number_format("$gia",0,",","."); ?></td>
        <td><?php echo $row['mau_sp']; ?></td>
        <td><?php echo $row['chi_tiet']; ?></td>
        <td><a href="xoasanpham.php?ma_sp=<?php echo $row['ma_sp'];?>">Xóa</a></td>
    </tr>


  <?php
  }
  }
  ?>
    <tr>
     <td colspan="6" align="right" width="100%"><h3><b>Tổng giá trị:<?php echo number_format("$tonggiatri",0,",","."); ?> VNĐ</b></h3></td>
    </tr>
    <tr>
   
  </style>>
      <td colspan="6" align="right" >

    
        <button type="submit" class="btn btn-default" ><a href="didong.php">Tiếp tục mua</a></button></a>
        <button type="submit" class="btn btn-default"><a href="xoasanpham.php">Delete</a></button>
        <button type="submit" class="btn btn-danger"><a href="capnhatcart.php">cập nhật</a></button>
      </td>
      
    </tr>
</thead>

</table>
</form >
    <form name="from1" method="post" action="hoa_don.php" align="center" >
  
    <tr>
     <button type="submit" class="btn btn-success"><h4>Đặt hàng</h4></button>
    </tr>
  </table>
</form>
 <?php
  }
} 
?>
    
  </div>
<BR><BR>
</body>
</html>