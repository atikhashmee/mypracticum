
                                    <?php 
                                        require_once 'php/dboperation.php';
										require_once 'php/functions.php';
						               $db = new Db();
                                          ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tenants Management System</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link href="assets/font/all.css" rel="stylesheet">
	
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> -->
  <link href="assets/font/all.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/taginput.css"  />
  <link rel="stylesheet" href="assets/css/togglebtn.css"  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="main-container">
<?php  include 'files/topbar.php'; ?>
	<div class="clr"></div>

	<div id="content-container">
		<?php 

          if (isset($_GET['path'])) {
          	if ($_GET['path']=="New_Post") {
              include 'owner/post-ads.php';
            }else if ($_GET['path']=="Search_home") {
          		include 'common/search_house.php';
          	} 
          	
          }else{
          	include 'common/home.php';
          }

		?>
		
	</div>
	
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script  src="assets/js/jquery.min.js"></script>

<!-- <script src="assets/js/bootstrap.js"></script> -->
<script src="assets/js/bootstrap.min.js"></script>
<script defer src="assets/font/all.js"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script defer src="assets/js/jquery.min.js"></script>
 <script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/togglebtn.js"></script>
<script src="assets/js/taginput.js"></script>
<script src="assets/js/myapp.js"></script>
<script defer src="assets/font/all.js"></script>




	
</body>
</html>