<!DOCTYPE html>
<html>
<head>
	<title>Thêm sản phẩm</title>
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
                    <h2>Thêm sản phẩm mới </h2>          
                  </div>
                </div>      
             <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">                  
                    <div class="x_content">
                      <form id="demo-form2"  action="addsp.php" method="POST">
                          <tr>
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" >Hãng sản phẩm </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" name="hang_sp" >
                              </div>
                            </div>
                          </tr>
                          <tr>
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" >Tên sản phẩm</label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text"  class="form-control" name="ten_sp">
                              </div>
                            </div>
                          </tr>
                          <tr>
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Giá sản phẩm</label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="number" class="form-control" name="gia_sp">
                              </div>
                            </div>
                          </tr>
                          <tr>
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" >Chi tiết</label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" name="chi_tiet">
                              </div>
                            </div>
                          </tr>
                          <tr>
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Màu sản phẩm</label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text"  class="form-control" name="mau_sp">
                              </div>
                            </div>
                          </tr>
                          <tr>
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Ghi chú </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text"  class="form-control" name="ghi_chu">
                              </div>
                            </div>
                          </tr>
                          <tr>
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Ngày sản suất</label>
                              <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control" type="date"  name="ngay_sx">
                              </div>
                            </div>
                          </tr>
                          <tr>
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">ảnh</label>
                              <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control" type="file"  name="anh_sp">
                              </div>
                            </div>
                          </tr>
                          <tr>
                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Ngày nhập</label>
                              <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control" type="date"  name="ngay_nhap">
                              </div>
                            </div>
                          </tr>  
                          <tr>                     
                              <div class="ln_solid"></div>
                              <div class="item form-group">
                              <div class="col-md-6 col-sm-6 offset-md-3">                       
                              <input type="submit" name="insert" value="nhap">
                              </div>
                            </div>
                          </tr>
                      </form>
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