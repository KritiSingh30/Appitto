<?php

include("../php/dbconnect.php");

$guests=$_POST['guests'];
$phone=$_POST['phone'];
$reservedate = $_POST['bookingtime'];

/* $guests=3;
$phone=365673;
$reservedate = '2021-04-30 00:21:09'; */

$sql = "INSERT INTO reservation (num_guests,phone,reserve_date) VALUES ('$guests','$phone','$reservedate')";

if ($con->query($sql) === TRUE)
{ echo "New record created successfully";}
 else
  { echo "Error: " . $sql . "<br>" . $con->error;}

?>