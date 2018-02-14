<?php 



require_once '../php/dboperation.php';
require_once '../php/functions.php';
                           $db = new Db();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tenants Management System</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link href="../assets/font/all.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="main-container">
<?php  include '../files/topbar.php'; ?>
	<div class="clr"></div>
	
		 <div class="container myadmin-container">
<div class="row">
  <div class="col-sm-3">
    <div class="sidebar-nav">
      <div class="navbar navbar-default mynavbar" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Dashborad menu</a></li>
            <li><a href="?route=district">Add district</a></li>
            <li><a href="?route=users_list">Users</a></li>
            <li><a href="#">Menu Item 4</a></li>
            <li><a href="#">Reviews <span class="badge">1,118</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9">
  	<div id="loadpages">
  		<?php  if (isset($_GET['route'])) {
               if ($_GET['route'] == "district") {
                   include 'location.php';
               }else if ($_GET['route']=="d_list") {
                   include 'districts.php';
               }else if ($_GET['route']=="users_list") {
                   include 'users.php';
               }
      } else {
          echo "Main content goes here";

      } ?>
  		
  	</div>
    
  </div>
</div>
</div>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script  src="../assets/js/jquery.min.js"></script>

<!-- <script src="assets/js/bootstrap.js"></script> -->
<script src="../assets/js/bootstrap.min.js"></script>
<script defer src="../assets/font/all.js"></script>
<script type="text/javascript">
	

	function loadpages() {
		console.log('Menu is cliecked');
		var place  = document.getElementById('loadpages');
		var xhr = new XMLHttpRequest();
		if (xhr.readyState == 4 && xhr.status == 200) {
			place.appendChild(xhr.responseXML); 
		}
		xhr.open("GET","location.php",true);
		xhr.send();

		
	}
</script>
	
</body>
</html>