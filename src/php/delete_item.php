<?php

include("../php/dbconnect.php");

$product_id=$_POST['product_id'];

$sql = "DELETE FROM `reservation` WHERE `reservation_id` = '$product_id';";

if ($conn->query($sql) === TRUE) {
    echo "Item removed from cart";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 

?>