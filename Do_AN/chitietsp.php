<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>T&P Store</title>
  <link rel="stylesheet" type="text/css" href="css/css2.css">
  <link rel="stylesheet" type="text/css" href="css/chitietSanpham.css">
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
</head>
<body id="myPage">
  <?php
  include "connect.php";
    if (isset($_GET['ma_sp'])) {
      $ma_sp = $_GET['ma_sp'];
      $sqldetail = "SELECT * FROM san_pham WHERE ma_sp = ".$ma_sp;
      $resultrow = mysqli_query($con, $sqldetail);
      $row = mysqli_fetch_row($resultrow);
      //echo "<pre>";
      //print_r($row);
      //die;
  ?>
  <?php 
  include "modules/menu.php";
  ?>
  <div class="content">
  <div class="container">
      <div class="page-header">
        <h1>Điện thoại <?php echo $row[2]; ?></h1>      
      </div>
          <div class="chitietSanpham" style="min-height: 85vh">
        <h1></h1>
        <div class="rowdetail group">
            <div class="picture">
                <img src="<?php echo $row[9]; ?>" width= "400px" height="310px" />
            </div>
            <div class="price_sale">
                <div class="area_price"><h3><b><?php echo number_format("$row[3]",0,",","."); ?> VNĐ</b></h3></div>
                
                <div class="area_promo">
                    <strong>khuyến mãi</strong>
                    <div class="promo">
                        <i class="fa fa-check-circle"></i>
                        <div id="detailPromo"> </div>
                    </div>
                </div>
                <div class="policy">
                    <div>
                        <i class="fa fa-archive"></i>
                        <p>Trong hộp có: Sạc, Tai nghe, Sách hướng dẫn, Cây lấy sim, Ốp lưng </p>
                    </div>
                    <div>
                        <i class="fa fa-star"></i>
                        <p>Bảo hành chính hãng 12 tháng.</p>
                    </div>
                    <div class="last">
                        <i class="fa fa-retweet"></i>
                        <p>1 đổi 1 trong 1 tháng nếu lỗi, đổi sản phẩm tại nhà trong 1 ngày.</p>
                    </div>
                </div>
                <div class="area_order">
                    <!-- nameProduct là biến toàn cục được khởi tạo giá trị trong phanTich_URL_chiTietSanPham -->
                    <a class="buy_now" href="mua.php?ma_sp=<?php echo $row[0]; ?>">
                        <h3><i class="fa fa-plus"></i> Thêm vào giỏ hàng</h3>
                    </a>
                </div>
            </div>
            <div class="info_product">
                <h2>Thông số kỹ thuật</h2>
                <ul class="info">
                  <li>Hãng sản xuất: Apple – iPhone

                    <li>Kích thước màn hình: 5,8''</li>

                    <li>Độ phân giải màn hình: 2436x1125</li>

                    <li>Hệ điều hành: iOS 13</li>

                   <li>Chip xử lý (CPU): Apple A13 Bionic</li>

                    <li>RAM: 4GB</li>

                   <li> Máy ảnh chính: Triple camera 12 MP </li>
                  </li>

                </ul>
            </div>
        </div>
        <!-- Form Comment -->
<?php

// Kết nối database
$con = mysqli_connect("localhost", "root", "", "ban_dien_thoai");
//Lấy giá trị POST từ form vừa submit0
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_ht = isset($_POST['id_ht']) ? $_POST['id_ht'] : "";
  $hoten = isset($_POST['hoten']) ? $_POST['hoten'] : "";
  $email = isset($_POST['email']) ? $_POST['email'] : "";
  $noidung = isset($_POST['noidung']) ? $_POST['noidung'] : "";
  $date = date('Y-m-d');
    //Code xử lý, insert dữ liệu vào database
    $sql = "INSERT INTO hotro (id_ht, hoten, email, noidung, date)
    VALUES ('".$id_ht."', '".$hoten."', '".$email."', '".$noidung."', '".$date."')";
    $rs = mysqli_query($con, $sql);

if (! $rs) {
    $rs = mysqli_error($con);
}

}


?>
<form action="" method="post">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input type="text" name="hoten" class="form-control" id="name" placeholder="Name" required>
        </div>
        <div class="col-sm-6 form-group">
          <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
        </div>
      </div>
      <textarea type="text" name="noidung" class="form-control" id="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
         <button type="submit" class="btn btn-success">Gửi</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- End -->
        
        </div>
    </div>

  <footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Liên hệ:123456789
   <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools"></a></p> 
   <p>FB:nguyendinhphong/1233/</p>
</footer>
<!-- Footer -->
  <?php  }else{
    echo "khoong tim thay san pham";
  } ?>
</body>
</html>

