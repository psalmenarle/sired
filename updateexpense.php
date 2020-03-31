<?php
  $exp_id = $_GET ['id'];
  
$conn = mysqli_connect("localhost","root","") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"heroku_5e9ae621cca5225");

$sql = "SELECT * FROM tblexpense WHERE exp_id = $exp_id";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));

$r = mysqli_fetch_assoc($q); 
?>




<div class="form-style-10">
						
							<form method="Post" action="updateexpense_confirm.php?id=<?php echo $exp_id?>">	
							
								<h1> Update Here</h1>
								
									<div class="section"><span>1</span>Please Complete the Form Below</div>
								
								<div class="inner-wrap">
								
										<label>Expense Name <br><br> <input type="text" name="expname" value="<?php echo $r['exp_name']; ?>"></label>
										<br>
										<label>Budget <br><br><input type="number" name="budget" value="<?php echo $r['budget']; ?>"></label>
								</div>
								
								<div class="button-section">
									<input type="Submit" name="submit" value="Show">
								</div>
								
								
							</form>
							
						</div>
