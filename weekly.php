<?php
$conn = mysqli_connect("localhost","b2d9ee006dc0a9","38ea438c") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"heroku_5e9ae621cca5225");


$sql = "SELECT * FROM tblallowance";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));
?>

<div class="split_left">
									<table class="option">
	 
										<tr>
												<th>Allowance Amount</th>
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
											<?php $allow_id = $r['allow_id']?>
											<td><a href="index.php?page=weeklybud&allow_id=<?php echo $allow_id;?>"> Show</a></td>
										</tr>

										<?php 
											}
											?>

									</table>
									
							</div>
