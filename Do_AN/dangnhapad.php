<?php
session_start();
?>
<html>
<head>
    <title>Trang đăng nhập admin</title>
    <link rel="stylesheet" href="css.css">
</head>
<body align="center">
<?php
    //Gọi file connect.php ở bài trước
    require_once("connect.php");

    $sql = "Select * from ad";
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
            $sql = "select * from ad where username = '$username' and password = '$password' ";
            $rs = mysqli_query($con,$sql);
            $num_rows = mysqli_num_rows($rs);
            if ($num_rows==0) {
                echo "Tên đăng nhập hoặc mật khẩu không đúng !";
            }else{
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // chuyển hướng trang web tới index.php
                header('Location: trangquanlyadmin/Admin/index.php');
            }
        
        }
    }
?>

    <form method="POST" >
            
            <table>
                <tr>
                    <td align="center"><H1>Đăng Nhập dưới mức danh ADMIN</H1></td>
                </tr>
                <tr>
                    <td>Tên đăng nhập:</td>
                    <td><input type="text" name="username" size="50"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" size="50"></td>
                </tr>
                <tr>
                    <td align="center"> <input type="submit" name="submit" value="Đăng nhập"></td>
                
                </tr>
                      <td align="center"> <input type="reset" value="Reset"></td>
            </table>
          
                   
  </form>
            <div align="center">
        
                    <br /><br />
        Dành cho khách hàng:<br /><br />
                    <input type='button' value='quay lại trang' class='button' onclick='location.href="dangnhap.php"'/>
                <h1>Iphone dởm!</h1>
                <p>©2020 Đã đăng ký Bản quyền. Iphone dởm! là một cửa hàng điện thoại. Quyền riêng tư và Điều khoản!</p>
            </div>
</body>
</html>