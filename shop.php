<!DOCTYPE html>
	<!--This page was written by Andrei Hribanas.-->
﻿<html>
	<head>
		<title> POWER BUDDIES </title>
		<meta hhttp-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" href="css/main.css" type="text/css"/>
	</head>
	<!-- <img src="images/green_energy_wallpaper.jpg" class="background" style="float:left; width=100% height=100%"/> -->
	<!-- <body background="images/energy3.jpg"> -->
	<body>
		<div id="center_page"> <!-- CENTERS THE WEB PAGE -->
			<header id="page_header"> <!-- PAGE HEADER -->
				<div class="logo">
					<img src="images/green5.jpg" class="logo_image" alt="logo image"/>
				</div>
				
				<div class="slogan">
					<p class="header_text"> <span class="power_text">POWER</span><span class="buddies_text">BUDDIES</span>, <br> <span style="color:#FADF0F">CONNECTED</span> FOR LONGER ! </p> <br>
					<p class="sub_header_text"><i> ' Green energy provider ' </i></p>
				</div>
				
				<div class="login_basket_buttons">
                                    <form action="register.php" method="POST">
                                            <input type="submit" value="Register" class="btn_register"><img src="images/login_logo2.jpg" class="login_logo"/>
                                    </form>

                                    <form action="login.php" method="POST">
                                            <input type="submit" value="Sign in" class="btn_login"><img src="images/login_icon.jpg" class="login_logo"/>
                                    </form>
                                    
                                    <form action="shop.php" method="POST">
                                            <input type="submit" value="Basket" class="btn_basket"><img src="images/basket5.jpg" class="basket_logo"/>
                                    </form>
				</div>

			</header>
			
			<!-- TOP NAVIGATION SEARCH SECTION -->
				<nav> 
					<div id="top_nav"> <!-- TOP NAVIGATION BAR -->	
						<a href="index.html"><input type="submit" value="HOME" class="navButton"></a>
						<a href="about_us.html"><input type="submit" value="ABOUT US" class="navButton"></a>
						<a href="shop.php"><input type="submit" value="PRODUCTS" class="navButton"></a>
						<a href="special_offers.html"><input type="submit" value="SPECIAL OFFERS" class="navButton"></a>
						<a href="customer_service.html"><input type="submit" value="CUSTOMER SERVICE" class="navButton"></a>
						<a href="contact_us.html"><input type="submit" value="CONTACT US" class="navButton"></a>
						
						<!-- SEARCH BAR -->
						<input type="submit" value="search" class="tfbutton"><input type="text" class="tftextinput" name="q" size="21" maxlength="120">
					</div>
				</nav>
                        
                        <section> <!-- THE MAIN SECTION OF THE WEBPAGE-->
				<?php
                                    $con=  mysqli_connect("localhost", "root", "1234", "dbs");
                                    $result=  mysqli_query($con, "SELECT * FROM tblProduct");
                                    mysqli_close($con);
                                    echo "<table id=\"product_table\" border=1 width=\"1230\">";
                                    echo "<th id=\"table_header\">Product name</th><th id=\"table_header\">Product image</th><th id=\"table_header\">Product description</th>"
                                    . "<th id=\"table_header\">Price</th><th id=\"table_header\">Add to basket</th>";

                                    while ($row = mysqli_fetch_array($result)) {
                                        $pname = $row[0];
                                        $image = $row[1];
                                        $description = $row[2];
                                        $price = $row[3];

                                        echo "<tr><td>$pname</td>";
                                        echo "<td><img src=\"$image\" width=\"200\" height=\"150\" /></td>";
                                        echo "<td width=\"600\">$description</td>";
                                        echo "<td> £$price</td>";
                                        echo "<td><form action=\"cart_update.php\" method=\"POST\"> "
                                         . "<input type=\"submit\" name=\"$pname\" value=\"Add $pname to Basket\" /></form></td></tr>"; 
                                       
                                    }

                                    echo "</table>";

                                 ?>
			</section> 
                        
        
   <footer>
				<div id="page_footer"> <!-- PAGE FOOTER -->
					<nav id="bottom_nav">  <!-- BOTTOM NAVIGATION BAR -->
						<a href="#"><input type="submit" value="Privacy & Cookies" class="navButton"></a>
						<a href="#"><input type="submit" value="Terms and conditions" class="navButton"></a>
						<a href="#"><input type="submit" value="Careers" class="navButton"></a>
						<a href="#"><input type="submit" value="Accessibility" class="navButton"></a>
						<a href="#"><input type="submit" value="F.A.Q." class="navButton"></a>
					</nav>					
			
					<div id="social_networking_block"> <!-- SOCIAL NETWORKING AREA (SOCIAL NETWORKS ICONS) -->
						<p><h5 id="message_text"> CONNECT WITH US </h5></p>
							<a href="https://www.facebook.com/"><img src="images/facebook_logo.jpg" id="social_button" alt="facebook" /></a>
							<a href="https://twitter.com/"><img src="images/twitter_logo.jpg" id="social_button" alt="twitter" /></a>
							<a href="http://www.linkedin.com/"><img src="images/linkedin_logo.jpg" id="social_button" alt="linkedin" /></a>
							<a href="http://www.plus.google.com/"><img src="images/google_logo.jpg" id="social_button" alt="google plus" /></a>
							<a href="http://www.youtube.com/"><img src="images/youtube_logo.jpg" id="social_button" alt="youtube" /></a>
							<a href="http://www.flickr.com/"><img src="images/flicker_logo.jpg" id="social_button" alt="google" /></a>
							<a href="http://www.instagram.com/"><img src="images/instagram_logo.jpg" id="social_button" alt="instagram" /></a>
					</div>
				</div>
			
			</footer>
			
			<div id="copywright">
					<h6> &copy; 2014 COPYWRIGHT POWER BUDDIES INC. All rights reserved. </h6>
					<h6> Designed by Andrei Hribanas </h6>
			</div>
				
		</div> <!-- center maker div -->
	</body>
</html>
