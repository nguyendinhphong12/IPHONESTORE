<?php
  session_start();
  session_unset();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập Admin</title>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
<?php
    require_once("connect.php");
    $sql = "Select * from nhan_vien";
    $rs = mysqli_query($con, $sql);
    // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
    if (isset($_POST["submit"])) {
        // lấy thông tin người dùng
        $username = $_POST["username"];
        $password = $_POST["password"];
        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
        if ($username == "" || $password =="") {
            echo "Tên đăng nhập hoặc Password bạn không được để trống!";
        }else{
            $sql = "select * from nhan_vien where username = '$username' and password = '$password' ";
            $rs = mysqli_query($con,$sql);
            $num_rows = mysqli_num_rows($rs);
            if ($num_rows==0) {
                echo "Tên đăng nhập hoặc mật khẩu không đúng !";
            }else{
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // chuyển hướng trang web tới index.php
                header('Location:index1.php');
            }
        
        }
    }
?>

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST">
              <h1>Đăng nhập Admin</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="" />
              </div>
              <div>
                <input type="submit" name="submit" value="Đăng nhập">
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">New to site?
                </p>
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
            <?php
              if(isset($_GET['err'])){
                if($_GET['err'] == 1){
                  echo "<p class='err'>Sai mật khẩu!</p>";  
                }
                else if($_GET['err'] == 2){
                  echo "<p class='err'>Are you trying to hack our site?</p>"; 
                }
              }
            ?>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
