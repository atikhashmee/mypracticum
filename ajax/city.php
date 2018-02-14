<?php 

                                       require_once '../php/dboperation.php';
										require_once '../php/functions.php';
						               $db = new Db();
						               
						                $city = $db->selectAll("city","district_id = '".$_GET['d_id']."'");
						                if ($city->rowCount()!=0) {
						                		while ($row = $city->fetch(PDO::FETCH_ASSOC)) {
						                			echo "<option value='".$row['city_id']."'>".$row['cityname']."</option>";
						                	
						                }
						                	
						                }else {
						                	echo "<option value=' '>No city directory</option>";
						                }
						                



?>