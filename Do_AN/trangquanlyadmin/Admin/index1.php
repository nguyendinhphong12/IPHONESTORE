<!DOCTYPE html>
<?php
  session_start();
  session_unset();
  session_destroy();
?>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<!-- Bootstrap -->
  <?php 
  include "bootstrap/bootstrap.php";
  ?>
  </head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
            <?php
            include('modules/left_col.php');          
            include('modules/top_nav.php');        
            include('modules/right_col.php');
            include('modules/footer.php');             	                      
            include('jquery/jquery.php');
            ?>
      </div>
    </div>
</body>
</html>