<?php
//database_connection.php
/* $connect = new PDO("mysql:host=localhost;dbname=attendancedbFinal", "root", ""); */

$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'WT_Project');

 if ($con) {
    echo 'connected';
  } else {
    echo 'not connected';
  }  

?>