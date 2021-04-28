<div class="content">
	<div class="container">
	  	<div class="page-header">
	    	<h1>Sản Phẩm mới </h1>      
	  	</div>
	  	<?php
      $kichthuoctrang =8;
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
      <form>
      <?php
		$sql = "select * from san_pham
		LIMIT $dongbatdau,$kichthuoctrang";
		$result = mysqli_query($con, $sql);
		mysqli_query($con,'set names utf8');
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
		  	<table align="center">
			  <div class="" style="width:200px; height:350px; border:1px solid #999; margin:30px; float:left; background:#fbfbfb" align="center">
				  <a href='chitietsp.php?ma_sp=<?php echo $row['ma_sp']; ?>'><img id="images" src="<?php echo $row['anh_sp']; ?>" width="190px" height="200px" /></a><br>
				  	<center><c><a href='chitietsp.php?ma_sp=<?php echo $row['ma_sp']; ?>'><b><?php echo ($ten_sp); ?></b></a><br>
				    <font color="#d02323"> Giá:<b> <?php echo number_format("$gia_sp",0,",","."); ?> VNĐ</b></font><br></c>
					<font color="#666666">loại: <?php echo $chi_tiet; ?></font></c>
					<font color="#666666">màu <?php echo $mau_sp; ?></font><br><br></c>    
				    <div id='button' >
				     <a href="mua.php?ma_sp=<?php echo $id; ?>">Mua hàng</a>
				    </div>

			  		</center>
				</div>
			</table>
		</form>

		<?php } ?>
	      
	</div>
</div>