<?php
$conn = mysqli_connect("localhost","root","") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"db_bank");
$sql = "SELECT * FROM tblexpense";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));
?>
<br>

<table class="option">
						
						<tr>
							<th>Expense Name</th>
							<th>Budget</th>
							<th>Options</th>
						</tr>
						
					<?php
						while($r = mysqli_fetch_assoc($q))
						{
						?> 
						
						<tr>
							<td><?php echo $r['exp_name'];?></td>
							<td><?php echo $r['budget'];?></td>
							<?php $e_id = $r['exp_id']?>
							<td> 
								<a href = "index.php?page=deleteexpense&id=<?php echo $e_id;?>&name=<?php echo $r['exp_name'];?>"> DELETE </a> or
								<a href = "index.php?page=update&id=<?php echo $e_id;?>"> UPDATE </a>
							</td>
						</tr>
					<?php 
						}
						?>
						
					</table>

						<div class = "option">
							<a href="index.php?page=add"> Add Expense</a>
						</div>