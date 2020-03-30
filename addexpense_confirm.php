<?php

$exp_name = $_POST['expname'];
$budget = $_POST['budget'];



include ("dbconnect.php");


$sql = "INSERT INTO tblexpense(exp_name,budget)VALUES('$exp_name',$budget)" ; 
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));







header ("location: index.php?page=expense");
?>		
