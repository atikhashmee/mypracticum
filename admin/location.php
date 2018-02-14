


			<div class="well">
				<div class="headerline"><h2>Add district</h2></div>
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			  <div class="form-group">
			    <label for="division">District Name</label>
			    <input type="text" class="form-control" id="division" name="division">
			  </div>
			  <button type="submit" name="dbtn" class="btn btn-default">Submit</button>
			</form>

			<?php 
				if (isset($_POST['dbtn'])) {
					  $data = array(
					  	'name' => $_POST['division'],
					  	'created_at' => date("Y-m-d")
					  	 );
					  if (!empty($_POST['division']) && $db->insert("district",$data)) {
					  	  echo "<h4 style='color:blue'>Data has been stored <a href='?route=d_list'>See list</a> </h4>";
					  }else{
					  	 echo "<h4 style='color:red'>Problem occured</h4>";
					  }
				}

			?>
           
			</div>

			<div class="well">
				<div class="headerline">
					<h2>Add cities</h2>
				</div>
				<form action="#" method="POST">
           	<div class="form-group">
			    <label for="division">District Name</label>
			      <select name="divisionname" id="divisionname" class="form-control">
			      	   <option value="">Select a division</option>
			      	   <?php 
			      	   		  $division = $db->selectAll("district");
			      	   		  while ($row = $division->fetch(PDO::FETCH_ASSOC)) {
			      	   		  	echo "<option value='".$row['district_id']."'>".$row['name']."</option>";
			      	   		  }
			      	   ?>
			      </select>
			  </div>
			  <div class="form-group">
			    <label for="city">City</label>
			    <input type="text" class="form-control" id="city" name="city">
			  </div>
			  <button type="submit" name="cbtn" class="btn btn-default">Submit</button>
			</form>

			<?php 
				if (isset($_POST['cbtn'])) {
					  $data = array(
					  	'district_id' => $_POST['divisionname'],
					  	'cityname' => $_POST['city'],
					  	'created_at' => date("Y-m-d")
					  	 );
					  if (!empty($_POST['divisionname']) && $db->insert("city",$data)) {
					  	  echo "<h4 style='color:blue'>Data has been stored <a href='?route=d_list'>See list</a> </h4>";
					  }else{
					  	 echo "<h4 style='color:red'>Problem occured</h4>";
					  }
				}

			?>
			</div>