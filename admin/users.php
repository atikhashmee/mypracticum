

		


		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="well">
						users list
					</div>
					<div class="well">
						<table class="table table-bordered table striped">
							<tr>
								<th>Sl</th>
								<th>Username</th>
								<th>Password</th>
								<th>E-mail</th>
								<th>Type</th>
							</tr>
							<?php 
							$i=0;
									$users = $db->selectAll("users");
									while ($row = $users->fetch(PDO::FETCH_ASSOC)) { $i++; ?>
										<tr>
											<td><?=$i?></td>
											<td><?=$row['username']?></td>
											<td><?=$row['password']?></td>
											<td><?=$row['email']?></td>
											<td><?=userType($row['type'])?></td>
										</tr>
									<?php }

							?>
						</table>
					</div>
				</div>
			</div>
		</div>