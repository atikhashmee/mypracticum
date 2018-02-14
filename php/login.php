

		<?php 

				require_once 'dboperation.php';
				require_once 'functions.php';
               $db = new Db();
				if (isset($_POST['btn'])) {

					$name = $_POST['name'];
					$pass = $_POST['pass'];
					$qry = $db->selectAll("users","username = '$name' AND password = '$pass' ");
					$data = $qry->fetch(PDO::FETCH_ASSOC);
					if (!empty($name) && !empty($pass)) {
						
							if ($name == $data['username'] && $pass == $data['password']) {

								session_start();
								$_SESSION['username'] = $name;
								$_SESSION['role']     =  $data['type'];
								$_SESSION['u_id']      = $data['u_id'];
								header("location:../index.php");
							}else{
								header("location:../login.php?msg=username and password don't match");

								//echo " <a href='../index.php'>Go back</a>";
							}
					}else {
						header("location:../login.php?msg=fields are empty , fill them first ..... ");
						
					}


				}	


		?>