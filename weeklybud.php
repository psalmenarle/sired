<?php

$allow_id = $_GET['allow_id'];

$conn = mysqli_connect("localhost","root","") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"db_bank");



$sql = "SELECT * FROM tblbudget where allow_id = $allow_id";
$b = mysqli_query($conn,$sql) or die (mysqli_error($conn));

$sqla = "SELECT * FROM tblallowance where allow_id = $allow_id";
$a = mysqli_query($conn,$sqla) or die (mysqli_error($conn));
$al = mysqli_fetch_assoc($a);

$allowance = $al['allow_amount'];



?>
<div class="split_left">
									<table>
	 
										<tr>
											<th>Expense Name</th>
											<th>Budget</th>											
											<th>Date</th>
											<th>Amount</th>
											
										</tr>
										
									<?php
										while($r = mysqli_fetch_assoc($b))
										
										{
										?> 
										
										<tr>
											<td><?php echo $r['exp_name'];?></td>
											<td><?php echo $r['budget'];?></td>	
										<?php
											$bud_id = $r['bud_id'];											
										?>
									<form method = "POST" action="addactual.php?bud_id=<?php echo $bud_id;?>">
											<td><select name = "date">
											<option value = "Day 1">Day 1</option>
											<option value = "Day 2">Day 2</option>
											<option value = "Day 3">Day 3</option>
											<option value = "Day 4">Day 4</option>
											<option value = "Day 5">Day 5</option>
											<option value = "Day 6">Day 6</option>
											<option value = "Day 7">Day 7</option>
											</select>
											<td><input type="number" name="amount"></td>						
											<td><input type="Submit" name="Add" value="Add"></td>
									</form>

										</tr>
									<?php 
										}
										?>

									</table>
									<br><br>
								</div>
									
					<div class="split_right">
								
									<table>
										<tr>	
											<th>Date</th>
											<th>Expense Name</th>
											<th>Budget</th>										
											
											<th>Amount</th>
											<th>Balance</th>									
										</tr>
							<?php
							
									
				$sqlac = "SELECT tblbudget.exp_name,tblbudget.budget,tblactual.date,tblactual.amount
			FROM tblbudget JOIN tblactual
			ON tblactual.bud_id = tblbudget.bud_id order by tblbudget.exp_name, tblactual.date";
$act = mysqli_query($conn,$sqlac) or die (mysqli_error($conn));			
							
				
				$balance = $allowance;
			
				while($ac = mysqli_fetch_assoc($act))
				{
		
		
			
							$actual = $ac['amount'];
										
							$balance = $balance - $actual;
				?>
								
										<tr>
										
											<td> <?php echo $ac['date'];?></td>
											<td> <?php echo $ac['exp_name'];?> </td>
											<td> <?php echo $ac['budget'];?> </td>	
																	
											
											<td> <?php echo $ac['amount'];?></td>	
									
				
										
										
											<td> <?php echo $balance;?></td>											
										</tr>
			
				<?php
		}
		
		?>	 		
						</table>

									<div class = "txt">
										<h1>Allowance: <i><?php echo $allowance; ?></i></h1>
									</div>
					</div>
									