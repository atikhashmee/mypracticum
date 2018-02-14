		<?php 


				 
				require_once("dboperation.php");
				$db = new Db();
				function userType($id)
				{
					switch ($id) {
						case 1:
							echo "Owener";
							break;
						case 2:
							echo "Tenants";
							break;
					}
				}
				function division($id)
				{
					$qry =   $GLOBALS['db']->selectAll("district","district_id = '".$id."'")->fetch(PDO::FETCH_ASSOC);
					echo $qry['name'];
				}
				function city($id)
				{
					$qry =   $GLOBALS['db']->selectAll("city","city_id = '".$id."'")->fetch(PDO::FETCH_ASSOC);
					echo $qry['cityname'];
				}


		?>