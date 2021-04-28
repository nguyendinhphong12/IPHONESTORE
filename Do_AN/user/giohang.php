<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>T&P Store</title>
  <link rel="stylesheet" type="text/css" href="../css/css2.css">
  <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/font-awesome/5.7.0/css/font-awesome.min.css” />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
    top: 0;
    width: 100%;
    z-index: 9999 !important;
  }

  .affix + .container-fluid {
    padding-top: 70px;
  }
  </style>
</head>
<body id="myPage"><nav class="navbar navbar-inverse" >
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand"  href="index.php"><img src="../images/logo2.jpg" width="105px" height="30px"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php"><i class="material-icons" style="font-size:18px">&#xe88a; TRANG CHỦ</i></a></li>
          <li><a href="../view/tin_tuc.php"><i class="material-icons" style="font-size:18px">&#xe85f; TIN TỨC</i></a></li>
          <li><a href="../didong.php"><i class="material-icons" style="font-size:18px">&#xe854; MUA HÀNG</i></a></li>
          <li><a href="#tour"><i class="material-icons" style="font-size:18px">&#xe8f6; SALE </i></a></li>
          <li><a href="../gh.php"> <i class="material-icons" style="font-size:18px">&#xe928; GIỎ HÀNG </i></a></li>
          <li class="dropdown"><a data-toggle="dropdown" href="#"><i class="material-icons" style="font-size:18px">&#xe853; TÀI KHOẢN </i></a>
              <ul class="dropdown-menu">
              <li><a href="index.php">Tài khoản</a></li>
              <li><a href="../dangnhap.php">Đăng nhập</a></li>
              
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="contents">
  
  <img src="../images/logo2.jpg" height="200px">
  <input type="text" placeholder="Search.." name="search" width="300">
    <button type="submit">Submit</button> 
  
   
  </div>
</div>
<br>
 
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
        <h2 align="center"><b>ĐƠN HÀNG CỦA BẠN</b></h2><br><br>
      <form method="post" action="">         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>tên sản phẩm </th>
        <th>Giá</th>
        <th>Số lượng</th>
        
        <th>Tổng giá trị</th>
        <th>màu</th>
        <th>loại máy</th>
        <th>trạng thái</th>
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
       
        <td><?php echo number_format("$gia",0,",","."); ?></td>
        <td><?php echo $row['mau_sp']; ?></td>
        <td><?php echo $row['chi_tiet']; ?></td>
        <td> <button type="submit" class="btn btn-danger"><a href="">Đang xử lý</a></button></td>
    </tr>


  <?php
  }
  }
  ?>
   
</thead>

</table>
</form >
    
 <?php
  }
} 
?>
    
  </div>
<BR><BR>

 <?php
  include "../modules/footer.php";
  ?>
<!-- Footer -->

</body>
</html>