<?php

$bud_id = $_GET['bud_id'];

$date = $_POST['date'];
$amount = $_POST['amount'];

$conn = mysqli_connect("localhost","root","") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"db_bank");


$sqlc = "SELECT * FROM tblbudget WHERE bud_id = $bud_id";
$c = mysqli_query($conn,$sqlc) or die (mysqli_error($conn)); 
$co = mysqli_fetch_assoc($c);

$allow_id = $co['allow_id'];

$sql = "INSERT INTO tblactual (date,amount,bud_id,allow_id) VALUES ('$date','$amount','$bud_id','$allow_id')";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn)); 

header ("location:index.php?page=weeklybud&allow_id=$allow_id");


?>