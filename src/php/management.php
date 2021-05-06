<?php 
include("../php/dbconnect.php");
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
    <link rel="stylesheet" href="http://localhost/Appitto/src/css/management.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
    <script src="http://localhost/Appitto/src/js/landing.js"></script>
    <title>Appitto</title>
</head>
    
<body>
    <navbar>
        <ul class="nav-list">
            <li class="nav-item">Appito Management Portal</li>
             <li class="nav-item"><a href="http://localhost/Appitto/src/php/management.php">Bookings</a></li>
             <li class="nav-item"><a href="http://localhost/Appitto/src/php/query.php">Queries</a></li>
             <li class="nav-item"><a href="http://localhost/Appitto/src/html/landing.php">Website</a></li>
             <li></li>
             <li class="nav-item"><a href="#" class="fa fa-facebook" id="facebook"></a></li>
             <li class="nav-item"><a href="#" class="fa fa-instagram" id="instagram"></a></li>
             <li class="nav-item"><a href="#" class="fa fa-twitter" id="twitter"></a></li>
        </ul>
    </navbar>



    <main>
        <br>
  
 		<table style='border-collapse:collapse;'>
    		<tr>
        		<th>Reservation Id</th>
       			<th>Guest Name</th>   
        		<th>Number of Guests</th>
        		<th>Phone Number</th>
        		<th>Booking Time</th>
    		</tr>
			<tr>
        		<td>demo</td>
       			<td>demo</td>   
        		<td>demo</td>
        		<td>demo</td>
        		<td>demo</td>
    		</tr>

<?php 
   
     $query = "SELECT reservation_id,guest_name,num_guests,phone,reserve_date FROM reservation";
     $result = mysqli_query($con,$query);
     $user_arr = array();

     while($row = mysqli_fetch_array($result)){

      $id = $row['reservation_id'];
      $name = $row['guest_name'];
      $num_guest = $row['num_guests'];
      $phone = $row['phone'];
      $date = $row['reserve_date'];
   
      $user_arr[] = array($id,$name,$num_guest,$phone,$date);
    
?>

    		<tr>
    			<td><?php echo $id; ?></td>
       			<td><?php echo $name; ?></td>
       			<td><?php echo $num_guest; ?></td>
       			<td><?php echo $phone; ?></td>
       			<td><?php echo $date; ?></td>
      		</tr>

<?php
    }
?>
   		</table> 

        <footer class="footer-distributed">

			<div class="footer-left">
				<h3>Appitio</h3>

				<p class="footer-links">
					<a href="#">Menu</a>
					|
					<a href="#">Offers</a>
					|
					<a href="#">Reservations</a>
					|
					<a href="#">Contact us</a>
				</p>

				<p class="footer-company-name">© Appitito Restaurant</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>M16, Connaught Cir,
                        Block M, Connaught Place,</span>
						New Delhi, Delhi 110001</p>

                          
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 22-27782183</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:reachus@appitito.com">reachus@appitito.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the Restaurant</span>
					Appitito is one of the most distinguished names in the culinary world as far as Chinese & Thai food is concerned. Since its inception in the year 1982 it has become a name to reckon with.</p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					
				</div>
			</div>
		</footer>
    </main>
</body>
</html>