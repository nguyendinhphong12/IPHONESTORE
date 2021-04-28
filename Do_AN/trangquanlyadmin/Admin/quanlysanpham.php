<!DOCTYPE html>
<html>
<head>
	<title>Quản lý sản phẩm</title>
	<meta charset="utf-8">
  <?php 
  include "bootstrap/bootstrap.php";
  ?>
  <style>
    a {
      text-decoration: none;
      display: block;
      color: black;
    }
  </style>
  </head>
<body class="nav-md">
  <?php
  $con = mysqli_connect('localhost', 'root', '', 'ban_dien_thoai');
  mysqli_query($con,'set names utf8');
  $sql = 'SELECT * FROM san_pham ORDER BY ma_sp DESC';
  $rs = mysqli_query($con, $sql);
  ?>
    <div class="container body">
      <div class="main_container">
            <?php
            include('modules/left_col.php');          
            include('modules/top_nav.php'); 
            ?> 
        <div class="right_col" role="main">
          <div class="">
           <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <h2> Quản lý </h2>          
                  </div>
                </div>      
             <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">                  
                  <div class="x_content">

                    <p>Danh sách quản lý sản phẩm</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">id</th>
                            <th class="column-title">Hãng sản phẩm </th>
                            <th class="column-title">Tên sản phẩm </th>
                            <th class="column-title">Giá sản phẩm </th>
                            <th class="column-title">Chi tiết sp </th>
                            <th class="column-title">màu sp</th>
                            <th class="column-title">Ghi chú</th>
                            <th class="column-title">Ngay sản xuất </th>
                            <th class="column-title">Ngày nhập </th>
                            <th class="column-title"> </th>
                            <th class="column-title">Ảnh </th>
                             <th class="column-title">xóa </th>
                            <th class="column-title no-link last"><span class="nobr">sửa</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                        
                        <?php 
                        while($row = mysqli_fetch_assoc($rs)) {
                            $id = $row['ma_sp'];
                            $hang = $row['hang_sp'];
                            $ten = $row['ten_sp'];
                            $gia = $row['gia_sp'];
                            $chitiet = $row['chi_tiet'];
                            $mau = $row['mau_sp'];
                            $ghichu = $row['ghi_chu'];
                            $date = $row['ngay_sx'];
                            $dates = $row['ngay_nhap'];
                            $img = $row['anh_sp'];
                        ?>
                                <tr class="a-center ">
                                  <td><?php echo $id; ?></td>
                                  <td><?php echo $hang; ?></td>
                                  <td><?php echo $ten; ?></td>
                                  <td><?php echo $gia; ?></td>
                                  <td><?php echo $chitiet; ?></td>
                                  <td><?php echo $mau; ?></td>
                                  <td><?php echo $ghichu; ?></td>
                                  <td><?php echo $date;?></td>
                                  <td><?php echo $dates;?></td>
                                  <td></td>                                   
                                  <td><img src="http://localhost/Do_AN/<?php echo $img;?>" width="50px" height="50px"/></td>
                                  <td><a  href="xoasanpham.php?ma_sp=<?php echo $row['ma_sp']; ?>" onClick="return confirm('Bạn có thực sự muốn xóa ?');">Xóa</a></td>
                                  <td><a href="#">sửa</a></td>
                                </tr>
                            <?php }?>
                           
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><a href="themsanpham1.php">Thêm sản phẩm</a></button>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <?php
            include('modules/footer.php');             	                      
            include('jquery/jquery.php');
            ?>

      </div>
    </div>
</body>
</html>