
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="well">
                     <form action="#" method="POST">
                        <div class="panel-group" id="accordion">
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#location">
                                    House Location</a>
                                 </h4>
                              </div>
                              <div id="location" class="panel-collapse collapse in">
                                 <div class="panel-body">
                                    <table class="table table-bordered">
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="division">Division/zone</label></td>
                                             <td><select class="form-control" name="division" id="division" onchange="cityname()">
                                                <option value=" ">Select a district</option>
            												  <?php 
                                                     $division = $db->selectAll("district");
                                                     while ($row = $division->fetch(PDO::FETCH_ASSOC)) {
                                                      echo "<option value='".$row['district_id']."'>".$row['name']."</option>";
                                                     }
                                             ?> 
												  </select></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="city">City/District</label></td>
                                             <td><select class="form-control" name="city" id="city">
                                               
												                
												  </select></td>
                                          </div>
                                       </tr>
                                      
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="location">Address/Location</label></td>
                                             <td><input type="text" class="form-control" name="location" id="location"></td>
                                          </div>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#information">
                                    House Information </a>
                                 </h4>
                              </div>
                              <div id="information" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <table class="table table-bordered">
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="nofbed">No of bed Room</label></td>
                                             <td><input type="number" class="form-control" name="nofbed" id="nofbed"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td>  <label for="nmbed">No of Master bed</label></td>
                                             <td><input type="number" class="form-control" name="nmbed" id="nmbed"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td>  <label for="Kitchen">Kitchen</label></td>
                                             <td><input type="number" class="form-control" name="Kitchen" id="Kitchen"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="nstrrom">No of store room</label></td>
                                             <td><input type="number" class="form-control" name="nstrrom" id="nstrrom"></td>
                                          </div>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#rent">
                                    Rent Information</a>
                                 </h4>
                              </div>
                              <div id="rent" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <table class="table table-bordered">
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="hrent">House Rent</label></td>
                                             <td><input type="number" class="form-control" name="hrent" id="hrent"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td>  <label for="scharge">Service charge</label></td>
                                             <td><input type="number" class="form-control" name="scharge" id="scharge"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="smoney">Security money</label></td>
                                             <td><input type="number" class="form-control" name="smoney" id="smoney"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="noroom">Negotiable</label></td>
                                             <td><input type="checkbox" data-toggle="toggle" name="neg" data-on="Yes" data-off="No"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="avfrom">Avaiable from </label></td>
                                             <td> <input type="date" class="form-control" name="avfrom" id="avfrom"></td>
                                          </div>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#facilities">
                                    Other information/facilities</a>
                                 </h4>
                              </div>
                              <div id="facilities" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <table class="table table-bordered">
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="noroom">Parking lot</label></td>
                                             <td><input type="checkbox" name="pl" data-toggle="toggle" data-on="Avaiable" data-off="Not-aviable"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td>  <label for="noroom">Bachelors</label></td>
                                             <td> <input type="checkbox" name="bchlr" data-toggle="toggle" data-on="Allowed" data-off="Not-allowed"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="leavenotice">Leave notice </label></td>
                                             <td><select class="form-control" name="leavenotice" id="leavenotice">
												    <option>Two Months ago</option>
												    <option>One Month ago</option>
												   
												  </select>
												   </td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="noroom">Generator </label></td>
                                             <td><input type="checkbox" name="genrator" data-toggle="toggle" data-on="Yes" data-off="No"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="noroom">Lift/elevator </label></td>
                                             <td> <input type="checkbox" name="lift" data-toggle="toggle" data-on="Yes" data-off="No"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="noroom">Gas </label></td>
                                             <td> <input type="checkbox" name="gas" data-toggle="toggle" data-on="Yes" data-off="No"></td>
                                          </div>
                                       </tr>
                                       
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="noroom">CCTV serviliance </label></td>
                                             <td> <input type="checkbox" name="cctv" data-toggle="toggle" data-on="Yes" data-off="No"></td>
                                          </div>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#Contactable">
                                    Contactable information</a>
                                 </h4>
                              </div>
                              <div id="Contactable" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <table class="table table-bordered">
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="cotactname">Name</label></td>
                                             <td><input type="text" name="cotactname" class="form-control" id="cotactname"></td>
                                          </div>
                                       </tr>
                                       <tr>
                                          <div class="form-group">
                                             <td> <label for="contactnumber">Phone number</label></td>
                                             <td><input type="text" name="contactnumber" data-role="tagsinput" class="form-control" id="contactnumber"></td>
                                          </div>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#terms">
                                    Terms &amp; conditions</a>
                                 </h4>
                              </div>
                              <div id="terms" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <div class="form-group">
                                       <label for="noroom">Write Terms & condition</label>
                                       <textarea cols ="30" rows="4" name="terms"></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <button type="submit" name="btn" class="btn btn-default">Submit</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                     </form>
                     <?php 

                     		if (isset($_POST['btn'])) {

                     			// echo "<pre>";
                     			// print_r($_POST);

                     			$data = array(
                     				'div_zone' => $_POST['division'], 
                     				'city' => $_POST['city'], 
                     				'hlocation' => $_POST['location'], 
                     				'nbedroom' => $_POST['nofbed'], 
                     				'nmasterbed' => $_POST['nmbed'], 
                     				'kitechen' => $_POST['Kitchen'], 
                     				'nstorerom' => $_POST['nstrrom'], 
                     				'hrent' => $_POST['hrent'], 
                     				'service_charge' => $_POST['scharge'], 
                     				'neg' => $_POST['neg'], 
                     				'avaiable_from' => $_POST['avfrom'], 
                     				'parking_lot' => $_POST['pl'], 
                     				'bachelor' => $_POST['bchlr'], 
                     				'leave_notice' => $_POST['leavenotice'], 
                     				'generator' => $_POST['genrator'], 
                     				'lift' => $_POST['lift'], 
                     				'gas' => $_POST['gas'], 
                     				'cctv' => $_POST['cctv'], 
                     				'contactable_name' => $_POST['cotactname'], 
                     				'contactnumber' => $_POST['contactnumber'], 
                     				'termscondition' => $_POST['terms'], 
                     				'created_at' => date("Y-m-d"), 
                     				'agent_user' =>$_SESSION['u_id']
                     			);

                     			if (!empty($_POST['nmbed']) && !empty($_POST['cotactname']) && !empty($_POST['contactnumber'])) {

                     				   if ($db->insert("houseadpost",$data)) {
                     				   	echo "<h1 style='color:green'>Data has been stored</h1>";
                     				   }else {
                     				   		echo "<h1 style='color:red'>Data base problem</h1>";
                     				   }
                     			}else {
                     				echo "<h1 style='color:red'>Empty</h1>";
                     			}


                     		}

                     ?>
                  </div>
               </div>
            </div>
         </div>
