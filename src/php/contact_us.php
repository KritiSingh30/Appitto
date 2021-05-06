<?php

include("../php/dbconnect.php");

$fname=$_POST['fullname'];
$email_id=$_POST['email_id'];
$msg = $_POST['message'];

/* $guests=3;
$phone=365673;
$reservedate = '2021-04-30 00:21:09'; */

$sql = "INSERT INTO contact_us (fullname,email,message) VALUES ('$fname','$email_id','$msg')";

/* if ($con->query($sql) === TRUE)
{ echo "New record created successfully";}
 else
  { echo "Error: " . $sql . "<br>" . $con->error;} */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/Appitto/src/css/contact.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Contact Us</title>
</head>
    
<body>
<h1>Thank you for reaching out to us!</h1>
<a href="../html/landing.php">Take me back to the Home Page</a>
</body>
</html>