<?php

$exp_id=$_GET['id'];


include ('dbconnect.php');

$sql="DELETE FROM tblexpense WHERE exp_id = $exp_id";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));

$sql="DELETE FROM tblbudget WHERE exp_id = $exp_id";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));


header ("location: index.php?page=expense");
?>