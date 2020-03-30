<?php

$b_id = $_GET ['bud_id'];


include ('dbconnect.php');

$sql="DELETE FROM tblbudget WHERE bud_id = $b_id";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));


header ("location:  index.php?page=budget");
?>