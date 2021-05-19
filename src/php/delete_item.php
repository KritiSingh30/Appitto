<?php
$db = mysqli_connect("localhost","root","","WT_Project");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id']; // get id through query string
$del = mysqli_query($db,"delete from reservation where reservation_id = '$id'"); // delete query

if($del)
{
    header("location:management.php"); // redirects to all records page
    exit;	 
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>