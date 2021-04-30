<?php

include("../php/dbconnect.php");

$fname=$_POST['fullname'];
$email_id=$_POST['email_id'];
$msg = $_POST['message'];

/* $guests=3;
$phone=365673;
$reservedate = '2021-04-30 00:21:09'; */

$sql = "INSERT INTO contact_us (fullname,email,message) VALUES ('$fname','$email_id','$msg')";

if ($con->query($sql) === TRUE)
{ echo "New record created successfully";}
 else
  { echo "Error: " . $sql . "<br>" . $con->error;}

?>