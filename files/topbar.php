

	<div id="top-bar">
		 <div id="brand">
		 	<div id="brand-imgcontainer">
		 		<a href="index.php"><img src="assets/img/fixed/logo.png" class="pull-right" width="50px" height="50px" alt=""></a>
		 	</div>
		 </div>
		 <div id="universal-search">
		 	<div id="search-bar-container">
		 		<form class="form-inline">
		 		<input type="search" class="form-control mycontrol" width="50%;">
		 		<button class="btn btn-default">Search</button>
		 	</form>
		 	</div>
		 	
		 </div>
		 <div id="topbar-menu">
		 	<div id="top-menu-block">
		 		<ul>
		 		<?php 
		 		session_start();

                if (!$_SESSION) {?>
                	<li><a href="login.php">Login </a></li>
		 		
              <?php   }else {?>
	              <li><a href=""><i class="fas fa-user"></i></a></li>
		 		<li><a href=""><i class="far fa-envelope"></i></a></li>
		 		<li><a href=""><i class="fas fa-globe"></i></a></li>
		 		
		 		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sliders-h"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#" target="_blank"">About us</a></li>
           

            <li role="separator" class="divider"></li>
            <?php 
            		if ($_SESSION['role'] == '1') {?>
            			<li><a href="?path=New_Post">Post House ads</a></li>
            			<li><a href="#">Manage Tenants</a></li>
            		<?php }

            ?>
            
            <li role="separator" class="divider"></li>
             <li><a href="logout.php">Logout</a></li>
            
          </ul>
        </li>

                <?php }

		 		?>
		 		
		 	
		 		
		 	</ul>
		 	</div>
		 	
		 </div>
	</div>