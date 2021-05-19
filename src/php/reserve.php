<?php

include("../php/dbconnect.php");

$guests=$_POST['guests'];
$phone=$_POST['phone'];
$reservedate = $_POST['bookingtime'];
$guest_name=$_POST['fname'] ;


$sql = "INSERT INTO reservation (num_guests,phone,reserve_date,guest_name) VALUES ('$guests','$phone','$reservedate','$guest_name')";

/* Uncomment the below code for testing the database update */
  if ($con->query($sql) === TRUE)
{ echo "New record created successfully";}
 else
  { echo "Error: " . $sql . "<br>" . $con->error;}  
 
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
<h3>Thank you for your booking request, our agent will get back to you for confirmation !</h3>
<a href="../html/landing.php">Take me back to the Home Page</a>
</body>
</html>