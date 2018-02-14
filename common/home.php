<div id="searching-block">
		<div class="form-block">
			<form action="?path=Search_home" method="POST" class="form-inline">
				<div class="row">
					<div class="col-md-2"></div>
					
					<div class="col-md-8">
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
					
					</div>
					<div class="col-md-2"></div>
					
				</div>
			
		
		
		</form>
		</div>
		
		
	</div>

	<div id="latest-newsblock">
		<div class="post-container">
			                     <?php 

						               $i=0;
						               $datat = $db->selectAll("houseadpost");
						               while ($row = $datat->fetch(PDO::FETCH_ASSOC)) {?>
						              
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
					<p>Location : <?=$row['div_zone']?> | <?=$row['city']?></p>
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


			?>
			
			
		</div>
	</div>

