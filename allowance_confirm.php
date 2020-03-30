<?php

$allowance = $_POST['allowance'];
$start = $_POST['start'];
$end = $_POST['end'];



include ("dbconnect.php");


$sql = "INSERT INTO tblallowance(allow_amount,allow_start,allow_end)VALUES($allowance,'$start','$end')" ; 
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));


$sqlo = "SELECT LAST_INSERT_ID() as ID";
$r = mysqli_query($conn,$sqlo) or die (mysqli_error($conn)); 
$re = mysqli_fetch_assoc($r);
$allow_id = $re['ID'];


$sqle = "INSERT INTO tblbudget(exp_id,exp_name,budget,allow_id) 
			SELECT exp_id,exp_name,budget,allow_id FROM tblexpense,tblallowance
				WHERE allow_id = $allow_id" ; 
$e = mysqli_query($conn,$sqle) or die (mysqli_error($conn));




header ("location: index.php?page=budget");
?>		

