<?php
$conn = mysqli_connect("localhost","root","") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"heroku_5e9ae621cca5225");
$sql = "SELECT * FROM tblbudget";
$b = mysqli_query($conn,$sql) or die (mysqli_error($conn));

$sql = "SELECT * FROM tblallowance";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));
?>

<div class="split_left">
									<table>
	 
										<tr>
												<th>Allowance Ammount</th>
												<th>Allowance Start</th>
												<th>Allowance End</th>
										</tr>

										<?php
											while($r = mysqli_fetch_assoc($q))
											{
										?> 
										<tr>
											<td><?php echo $r['allow_amount'];?></td>
											<td><?php echo $r['allow_start'];?></td>
											<td><?php echo $r['allow_end'];?></td>
										</tr>

										<?php 
											}
											?>

									</table>
											<div class="option">
												<a href="index.php?page=allowance"> Set Allowance</a>
											</div>
							</div>
							
							
							<div class="split_right">
									<table class="option">
										
										<tr>
											<th>Expense Name</th>
											<th>Budget</th>											
											<th>Delete if not Needed</th>
										</tr>
										
									<?php
										while($r = mysqli_fetch_assoc($b))
										{
										?> 
										
										<tr>
											<td><?php echo $r['exp_name'];?></td>
											<td><?php echo $r['budget'];?></td>											
											<?php $b_id = $r['bud_id']?>
											<td> 
												<a href = "index.php?page=deletebudget&bud_id=<?php echo $b_id;?>&name=<?php echo $r['exp_name'];?>"> DELETE </a>
											</td>
										</tr>
									<?php 
										}
										?>
										
									</table>
							</div>
