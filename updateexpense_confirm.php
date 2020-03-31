<?php

$exp_id = $_GET ['id'];
$expname = $_POST['expname'];
$budget = $_POST['budget'];


$conn = mysqli_connect("localhost","b2d9ee006dc0a9","38ea438c") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"heroku_5e9ae621cca5225");

$sql = "UPDATE tblexpense SET exp_name = '$expname', budget = $budget WHERE exp_id = $exp_id " ; 
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));

$sql = "UPDATE tblbudget SET exp_name = '$expname', budget = $budget WHERE exp_id = $exp_id " ; 
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));
header ("location: index.php?page=expense");
?>		
