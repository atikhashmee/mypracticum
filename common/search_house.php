<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="well">
				<div class="headerline"><h2>Filter</h2></div>
				<div class="headerline">
					<strong>Budget Range :</strong><p id="output"></p>
					<input type="range" class="form-control" id="rangslide" min="5000" max="10000">
				</div>
				<div class="headerline">
					<h3> Bedroom </h3>
					<input id="ticketNum" type="number" name="ticketNum" list="defaultNumbers">
						<span class="validity"></span>

						<datalist id="defaultNumbers">
						  <option value="1">
						  <option value="2">
						  <option value="3">
						  <option value="4">
						  
						</datalist>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="well">
			<form action="?path=Search_home" method="POST" class="form-inline">
						<div class="form-group">
						 <select class="form-control" name="division" id="division" onchange="cityname()">
                                                <option value=" ">Select a district</option>
            												  <?php 
                                                     $division = $db->selectAll("district");
                                                     while ($row = $division->fetch(PDO::FETCH_ASSOC)) {
                                                      echo "<option value='".$row['district_id']."'>".$row['name']."</option>";
                                                     }
                                             ?> 
												  </select>
					</div>
					<div class="form-group">
						<select class="form-control" name="city" id="city">
                                               <option value="">Select your city</option>
												                
												  </select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default" name="home_search">Search</button>
					</div>
						</form>
						</div>
					
					</div>
		<div class="col-md-8">
			<div class="well">
				     <?php 

				     if (isset($_POST['home_search'])) {
				     	

				             $datat = $db->selectAll("houseadpost","div_zone='".$_POST['division']."' AND city = '".$_POST['city']."'");
				             if ($datat->rowCount() <=0 ) {
				             	 echo "<h1 style='color:red'>Nothing found</h1>";
				             }else{


				             
				             $i=0;
						              
						               while ($row = $datat->fetch(PDO::FETCH_ASSOC)) {
				     

						               ?>
						              
						               <div class="each-post">
				<div class="name-title">
					<h3> <strong> From :  <?=$row['avaiable_from']?> </strong> </h3> <span class="dropdown tagmenu pull-right" >

						<a href="#" class="dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Report</a></li>
            <li><a href="#">Hide The post</a></li>
            <li><a href="#">Tag a user</a></li>
            <li><a href="#">Poster details</a></li>
          </ul>

					</span>
				</div>
				<div class="adres-title">
					<p>Address : <?=$row['hlocation']?></p>
					<p>Location : <?=division($row['div_zone'])?> | <?=city($row['city'])?></p>
					<p>Contact with : <?=$row['contactable_name']?> | <?=$row['contactnumber']?></p>
					<p>Rating : <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span></p>
				</div>
				<div class="footer-title">
					<button>See details</button>
					<button>Book</button>
					<button type="button" class="btn btn-default"><i class="far fa-heart"></i></button>
					<button type="button" class="btn btn-default"><i class="far fa-bookmark"></i></button>
					<button type="button" class="btn btn-default"><i class="fas fa-share-alt"></i></button>
				</div>
			</div>


						             <?php   }
						         }
						         }else {


						         	echo "<h1 style='color:red'>its not executed</h1>";
						         }


			?>
			
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var rang =  document.getElementById('rangslide');
	var output =  document.getElementById('output');

	  output.innerHTML = rang.value;

	rang.oninput = function () {
		output.innerHTML = this.value;
	}


</script>