<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>T&P Store - <?php isset($_SESSION['username']);
   echo $_SESSION['username']; ?></title>
  <link rel="stylesheet" type="text/css" href="css/css1.css">
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
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        <a class="navbar-brand"  href="index.php"><img src="../images/logo2.jpg" width="105px" height="30px"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php"><i class="material-icons" style="font-size:18px">&#xe88a; TRANG CHỦ</i></a></li>
          <li><a href="#band"><i class="material-icons" style="font-size:18px">&#xe85f; TIN TỨC</i></a></li>
          <li><a href="../didong.php"><i class="material-icons" style="font-size:18px">&#xe854; MUA HÀNG</i></a></li>
          <li><a href="#tour"><i class="material-icons" style="font-size:18px">&#xe8f6; SALE </i></a></li>
          <li><a href="../gh.php"> <i class="material-icons" style="font-size:18px">&#xe928; GIỎ HÀNG </i></a></li>
          <li class="dropdown"><a data-toggle="dropdown" href="#"><i class="material-icons" style="font-size:18px">&#xe853; TÀI KHOẢN </i></a>
              <ul class="dropdown-menu">
              <li><a href="index.php">Tài khoản</a></li>
              <li><a href="#"></a></li>
             
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid" style=" padding-top: 25px;">    
  <!-- The Grid -->
   <!-- Left Column -->
    <div class="col-lg-2 col-md-3 col-sm-12">
      <!-- Profile -->
      <div class="w3-sand">
        <div class="w3-container">
         <h4 class="w3-center"> Chào bạn!</h4>
         <p class="w3-center"><img src="../images/logo.jpg" class="w3-circle" style="height:70px;width:70px" alt="Avatar"></p>
       <h4 class="w3-center"><?php
          if ($_SESSION) {
             isset($_SESSION['username']);
                              echo ''.$_SESSION['username'];
          }else{
            echo 'Tài khoản';
          }

           ?>
</h4>
         <hr>
        
      <div class="w3-bar-block w3-sand w3-center">
  <a href="?action=info" class="w3-bar-item w3-button <?php if($act == "info")echo 'active';?>"><i class="glyphicon glyphicon-user  w3-xxlarge"></i><br>Thông tin </a> 
  <hr> 
  <hr>
     <a href="giohang.php" class="w3-bar-item w3-button <?php if($act == "order")echo 'active';?>"><i class="glyphicon glyphicon-shopping-cart  w3-xxlarge"></i><br>Đơn hàng của bạn </a> 
  <hr>
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16" onclick="document.getElementById('phanhoi').style.display='block'"><i class="glyphicon glyphicon-comment w3-xxlarge"></i><br>Gửi phản hồi</a>
      <hr>
     <a href="../logout.php" class="w3-bar-item w3-button"><i class="glyphicon glyphicon-log-in w3-xxlarge"></i><br>Đăng xuất</a> 
  <hr>
      
</div>
        </div>
      </div>
      <br>
      </div>
   

      </div>

  
<!-- Footer -->

</body>
</html>

