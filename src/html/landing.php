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
    <link rel="stylesheet" href="http://localhost/Appitto/src/css/landing.css">
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
             <li class="nav-item"><a href="http://localhost/Appitto/src/html/landing.html">Appitto</a></li>
             <li class="nav-item"><a href="http://localhost/Appitto/src/html/menu.html">Menu</a></li>
             <li class="nav-item"><a href="http://localhost/Appitto/src/html/offers.html">Offers</a></li>
             <li class="nav-item"><a href="http://localhost/Appitto/src/html/reservation.html">Reservations</a></li>
             <li class="nav-item"><a href="http://localhost/Appitto/src/html/contact.html">Contact Us</a></li>
             <li class="nav-item"><a href="#" class="fa fa-facebook" id="facebook"></a></li>
             <li class="nav-item"><a href="#" class="fa fa-instagram" id="instagram"></a></li>
             <li class="nav-item"><a href="#" class="fa fa-twitter" id="twitter"></a></li>
        </ul>
    </navbar>

    <div class="hero-image">
        <div class="hero-text">
            <h1>Appitto</h1>
            <p>Fine dining experience</p>
            <p>Appitto open for safe pick-up, delivery and patio dining - see you soon!</p>
            <p>
             <button class="primaryBtn" id="reserve"><a id="linktoBook" href="#reserveTable" style="text-decoration: none; color: white;">Book your table now</a></button>
             </p>
        </div>
    </div>

    <main>
        <section class="offer">
            <h2 class="section-title">Our Offers</h2>
            <hr/>
            <p class="section-text">Appitto displays an inspiring take on French cuisine in a relaxing environment. we believe in everything at its prime. Our focus is to bring the best and most responsibly sourced ingredients to the table.</p>
                <div class="flex-container">
                    <div class="flex-child magenta" id=holder>
                    </div>
                    <div class="flex-child green">
                        <p class="normal-text">Get upto</p>
                        <p class="big-text">10% OFF</p>
                        <p class="normal-text"> on your in-restaurant dining experience with <br>your <em>Appitto </em>membership</p>
                    </div>
                </div>
        </section>

        <section class="menu">
            <h2 class="section-title">Our Menu</h2>
            <hr/>
            <p class="section-text">Appitto displays an inspiring take on French cuisine in a relaxing environment. we believe in everything at its prime. Our focus is to bring the best and most responsibly sourced ingredients to the table.</p>
            <div class="foodtiles">
                <div class="tiles-grid">
                    <div data-role="tile" data-size="large" data-cover="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1534&q=80"></div>
                    <div data-role="tile" data-size="medium" data-cover="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"></div>
                    <div data-role="tile" data-size="medium" data-cover="https://images.unsplash.com/photo-1529042410759-befb1204b468?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=333&q=80"></div>
                    <div data-role="tile" data-size="wide" class="col-5 row-3" data-cover="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=334&q=80"></div>
                    <div data-role="tile" data-size="large" data-cover="https://images.unsplash.com/photo-1484980972926-edee96e0960d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"></div>
                    <div data-role="tile" data-size="wide" data-cover="https://images.unsplash.com/photo-1481070555726-e2fe8357725c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=375&q=80"></div>
                    <div data-role="tile" data-size="wide" data-cover="https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=401&q=80"></div>
                </div>
            </div>
        </section>
        <section class="about">
            <h2 class="section-title">Who are we ?</h2>
            <hr />
            <p class="section-text">t was a success from the start but quickly became something even bigger... a game changer. We saw what was happening and got excited. Let’s keep going. So we discovered quinoa and expanded the menu to serve a full selection of high-protein salads, wraps, and bowls customizable for all diets. Every body loved it. The all-day power of protein grew in popularity. We all started eating, feeling and moving better. It’s all good.</p>
            <div class="flex-container">
                <div class="flex-child" id="chef1">
                    <img src="/images/chef-1.png" alt="Chef Steeve" srcset="">
                    <p>With the Hasia Restaurant we would like to introduce you to our regional cuisine and hospitality. We offer you authentic Vietnamese cuisine, with fresh ingredients, tastefully prepared.</p>
                </div>
                <div class="flex-child" id="chef2">
                    <img src="/images/chef-2.png" alt="Chef John" srcset="">
                    <p>With the Hasia Restaurant we would like to introduce you to our regional cuisine and hospitality. We offer you authentic Vietnamese cuisine, with fresh ingredients, tastefully prepared.</p>
                </div>
            </div>
        </section>
        <section class="reserve" id="reserveTable">
            <h2 class="section-title">Book a Table</h2>
            <hr/>
            <p class="section-text">Appitto displays an inspiring take on French cuisine in a relaxing environment. we believe in everything at its prime. Our focus is to bring the best and most responsibly sourced ingredients to the table.</p>
            <div class="booking">
                <form action="../php/reserve.php" class="myform" method="POST">
                  <label for="guests"></label>
                  <input type="number" id="guests" name="guests" min="2" max="8" placeholder="Number of guests" required>
                  <label for="phone"></label>
                  <input type="int" id="phone" name="phone" placeholder="Phone number" required>
                <!--   pattern="[0-9]{5}-[0-9]{5}" -->
                  <label for="bookingtime"></label>
                  <input type="datetime-local" id="bookingtime" name="bookingtime" placeholder="Select date and time" required>
                  <div id="submitbtn" >
                 
                    <svg  id="cutlery" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380.7 380.7" >
                    <path d="M190.4 29.8a160.5 160.5 0 00-69.1 305.3l5-97.1s-9.5-3.1-11.5-4.1c-20-8.8-34.6-34.8-34.6-68.6 0-36.8 28.5-68.5 56.1-68.8h.1c27.7.3 56.2 32 56.2 68.8 0 33.8-14.6 59.7-34.6 68.6l-11.6 4.2 5.6 108a160.2 160.2 0 0089.4-3.6l5-96.3a51.6 51.6 0 01-31.3-21.6c-8.7-13 6.7-128.1 6.7-128.1h10v108h10v-108h10.8v108h9.8v-108h11.3v108h10v-108h7.6s15.3 115 6.7 128c-7 10.4-18 18.7-31 21.7l-.4.2 4.3 82.7a160.3 160.3 0 00-80.5-299.3z"/>
                    <path d="M103.7 149c.5-2.4 1.3-4.6 1.3-4.6.3-.9-.2-1.8-1.1-2.4-1-.5-2-.2-2.5.6l-2.7 4.3a46.5 46.5 0 00-4.6 10.2c-1 3.9-2.4 9-3 14.8a40.6 40.6 0 001.4 17.7c3.1 9 5.5 17.7 14.3 26.2 2.8 2.9 5.6 4.8 7.7 6.2l.7.6 1.3.8c1.7.9 2.9 1.2 3 1.2 1 .3 1.8-.2 2.2-.8.3-.8 0-1.7-.6-2.3 0 0-1-.8-2.3-2.5-.9-1-1.8-2.4-3-4l-2.5-3.7c-4.3-6.5-6.7-15.6-10.1-25-.7-2-1.3-4.6-1.5-6.8a97 97 0 012-30.5z"/>
                    <path d="M190.4 0C85.4 0 0 85.4 0 190.4c0 104.9 85.4 190.3 190.4 190.3s190.3-85.4 190.3-190.3C380.7 85.4 295.3 0 190.4 0zm0 366.5c-97.2 0-176.2-79-176.2-176.1 0-97.2 79-176.2 176.2-176.2 97.1 0 176.1 79 176.1 176.2 0 97-79 176.1-176.1 176.1z"/></svg>
                    <button type="submit" name="submitbtn">Reserve</button>
                  </div>
                  </form> 
            </div>
        </section>
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