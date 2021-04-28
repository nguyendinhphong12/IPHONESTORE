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
  #conten #left ul li img {
  width: 200px;
  height:200px;
  float: left;
  margin-right: 10px;   /* căn phải */
  margin-bottom: 20px;  /* căn dưới */
  border : 1px solid black;
}

#conten #left {
}
#conten #left ul {
  margin:0px;
  padding: 0px;
  border:1px solid #ccc;
}
#conten #left ul li {
  list-style: none;
  clear: left;
  float: left;
  border-bottom:2px solid black;
  margin-bottom: 20px;
  margin-top: 20px;
}
#conten #left ul li h3 a {
  text-decoration: none;
  display: block;
  color: black;
}
#conten #left ul li h3 a:hover {
  color: blue;
}

#conten #left ul li h3 {
  margin-top: 0px;
}

  </style>
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
        <a class="navbar-brand"  href="index.php"><img src="../images/logo2.jpg" width="105px" height="30px"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php"><i class="material-icons" style="font-size:18px">&#xe88a; TRANG CHỦ</i></a></li>
          <li><a href="tin_tuc.php"><i class="material-icons" style="font-size:18px">&#xe85f; TIN TỨC</i></a></li>
          <li><a href="../didong.php"><i class="material-icons" style="font-size:18px">&#xe854; MUA HÀNG</i></a></li>
          <li><a href="#tour"><i class="material-icons" style="font-size:18px">&#xe8f6; SALE </i></a></li>
          <li><a href="../gh.php"> <i class="material-icons" style="font-size:18px">&#xe928; GIỎ HÀNG </i></a></li>
          <li class="dropdown"><a data-toggle="dropdown" href="#"><i class="material-icons" style="font-size:18px">&#xe853; TÀI KHOẢN </i></a>
              <ul class="dropdown-menu">
              <li><a href="user/index.php">Tài khoản</a></li>
              <li><a href="dangnhap.php">Đăng nhập</a></li>
              <li><a href="index.php">logout</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="contents">
  <img src="../images/logo2.jpg" height="200px">
  
</div>
  <!-- cuộn -->
  <div class="clear"></div>
      <div class="conten">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="../images/tin_tuc1.jpg" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="../images/tin_tuc2.jpg" alt="Chicago" style="width:100%; height: 100%;">
        </div>
      
        <div class="item">
          <img src="../images/tin_tuc3.jpg" alt="New york" style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="content">
  <div class="container">
      <div class="page-header">
        <h1>Tin tức mới</h1>      
      </div>


      <?php
      $kichthuoctrang =4;
      $tongsotrang = 0;
      $dongbatdau = 0;
      $tranghientai = 1;
      $con = mysqli_connect('localhost', 'root', '', 'ban_dien_thoai');
      mysqli_query($con,'set names utf8');
      $sqli = "select count(*) as tongsodong from tin_tuc";
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
      <form>
      <?php
    $sql = "select * from tin_tuc
    LIMIT $dongbatdau,$kichthuoctrang";
    $result = mysqli_query($con, $sql);
    mysqli_query($con,'set names utf8');
    ?>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $tieu_de = $row['tieu_de'];
        $ngay_dang = $row['ngay_dang'];
        $noi_dung = $row['noi_dung'];
        $anh = $row['anh'];
    ?> 
        <div id="conten">
            <div id="left">
                <ul>      
                    <li><img src="<?php echo ($row['anh']); ?>" alt="giay"/>
                    <h3> <a href='chi_tiet_tin_tuc.php?id=<?php echo $row['tieu_de']; ?>'><b>"<?php echo ($tieu_de); ?>" </b></a></h3>      
                    <h4><?php echo ($ngay_dang); ?></h4>
                    <h4><?php echo ($noi_dung); ?>...</h4>                 
                </ul>
            </div>

            
        </div>
      
    </form>

    <?php } ?>
        
  
      </div>
  </div>



  <?php
  include "../modules/footer.php";
  ?>
<!-- Footer -->

</body>
</html>

