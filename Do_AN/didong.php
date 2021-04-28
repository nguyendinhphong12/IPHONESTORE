<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang sản phẩm</title>
  <link rel="stylesheet" type="text/css" href="css/css2.css">
  <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/font-awesome/5.7.0/css/font-awesome.min.css” />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="myPage">
  <nav class="navbar navbar-inverse" >
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand"  href="index.php"><img src="images/logo2.jpg" width="105px" height="30px"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><i class="material-icons" style="font-size:18px">&#xe88a; TRANG CHỦ</i></a></li>
          <li><a href="view/tin_tuc.php"><i class="material-icons" style="font-size:18px">&#xe85f; TIN TỨC</i></a></li>
          <li><a href="didong.php"><i class="material-icons" style="font-size:18px">&#xe854; MUA HÀNG</i></a></li>
          <li><a href="#tour"><i class="material-icons" style="font-size:18px">&#xe8f6; SALE </i></a></li>
          <li><a href="gh.php"> <i class="material-icons" style="font-size:18px">&#xe928; GIỎ HÀNG </i></a></li>
          <li class="dropdown"><a data-toggle="dropdown" href="#"><i class="material-icons" style="font-size:18px">&#xe853; TÀI KHOẢN </i></a>
              <ul class="dropdown-menu">
              <li><a href="user/index.php">Tài khoản</a></li>
              <li><a href="dangnhap.php">Đăng nhập</a></li>
              <li><a href="logout.php">logout</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  

<?php
include "modules/contents.php"
?>
<br>
  <div class="container">
  <h3>Sản phẩm</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Iphone 11pro</a></li>
    <li><a href="#">Iphone X</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
  <br>
    <?php
      $kichthuoctrang =10;
      $tongsotrang = 0;
      $dongbatdau = 0;
      $tranghientai = 1;
      $con = mysqli_connect('localhost', 'root', '', 'ban_dien_thoai');
      mysqli_query($con,'set names utf8');
      $sqli = "select count(*) as tongsodong from san_pham";
      $rsi = mysqli_query($con,$sqli);
      $rowi = mysqli_fetch_assoc($rsi);
      $tongsodong = $rowi['tongsodong'];
      //tinh toan ra tong so trang
      if ($tongsodong % $kichthuoctrang !=0) {
        $tongsotrang = (int)($tongsodong / $kichthuoctrang)+1;
      }else{
        $tongsotrang = (int)($tongsodong / $kichthuoctrang);
      }
      // tính toán ra dòng bắt đầu và trang hiện tại
      if ((!isset($_GET['tranghientai'])||($_GET['tranghientai'])==1)) {
        $dongbatdau = 0;
        $tranghientai = 1;
      }else{
        $dongbatdau = ($_GET['tranghientai']-1)*$kichthuoctrang;
        $tranghientai = $_GET['tranghientai'];
      }
      ?>

<form method="post"  action="">

<?php
$sql = "select * from san_pham
LIMIT $dongbatdau,$kichthuoctrang";
$result = mysqli_query($con, $sql);
mysqli_query($con,'set names utf8');
?>
<?php
  if(isset($_GET['search'])) {
    $s=$_GET['search'];
    $sql = " SELECT * FROM san_pham WHERE ten_sp LIKE '%$s%' ORDER BY ma_sp DESC";
    $result = mysqli_query($con, $sql);
  } 
?>

<?php
while($row = mysqli_fetch_assoc($result)) {
    $id = $row['ma_sp'];
    $ten_sp = $row['ten_sp'];
    $anh = $row['anh_sp'];
    $gia_sp = $row['gia_sp'];
    $chi_tiet = $row['chi_tiet'];
    $mau_sp = $row['mau_sp'];
?>
  <table align="center"  >
   <div style="width:200px; height:330px; border:1px solid #999; margin:17px; float:left; background:#fbfbfb" align="center">
    <a href='chitietsp.php?ma_sp=<?php echo $row['ma_sp']; ?>'><img id="images" src="<?php echo $row['anh_sp']; ?>" width="190px" height="200px" /></a>
<br>
    <center><a href='chitietsp.php?ma_sp=<?php echo $row['ten_sp']; ?>'><b><?php echo ($ten_sp); ?></b></a>
    <font color="#d02323" font-weight: bolder;> Giá: <b><?php echo number_format("$gia_sp",0,",","."); ?> VNĐ</b></font>
    <br><br>
    <div id='button'>
      <a href="mua.php?ma_sp=<?php echo $id; ?>">Mua hàng</a>
    </div>
  </center>
</div>
</table>

<?php } ?>

</form>
<div id="phantrang">
      <nav aria-label="Page navigation " class="clearfix" style="float: right;margin-right: 60px; margin-top: 20px;margin-bottom: 0;">
        <ul class="pagination" id="phantrang">
          <?php for( $i = 1 ; $i <= $tongsotrang; $i++ ) : ?>
            <?php
            if (isset($_GET['tranghientai']))
            {
              $p = $_GET['tranghientai'];
            }
            else
            {
              $p = 1;
            }
            ?>
            <li class="<?php echo($i == $p) ? 'active' : '' ?>">
              <a  style="padding:5px 10px; border: 1px solid  #4682B4;text-decoration: none;" href="?tranghientai=<?php echo $i ;?>"><?php echo $i; ?></a>
            </li>
          <?php endfor; ?>  
        </ul>
      </nav>
    </div>
  </div>
    <br>
    <?php
    include "modules/footer.php";
    ?>
</body>
</html>