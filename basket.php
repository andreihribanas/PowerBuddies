<?php 
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }
?>

﻿<!DOCTYPE html>
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
					<form>
                                            <a href="index.php"><input type="submit" value="Sign in / Register" class="btn_login"><img src="images/login_logo2.jpg" class="login_logo"/></a>
                                            <a href="shop.php"><input type="submit" value="Basket" class="btn_basket"><img src="images/basket5.jpg" class="basket_logo"/></a>
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

			
			<section id="page_section"> <!-- THE MAIN SECTION OF THE WEBPAGE-->
                            <table>
				        <?php
                                            // print_r($_POST);
                                            foreach ($_POST as $key => $value) {
                                                if (isset($_SESSION[$key])) {
                                                    $_SESSION[$key] = $_SESSION[$key] + 1;
                                                    
                                                    $con=  mysqli_connect("localhost", "root", "1234", "dbs");
                                            $result=  mysqli_query($con, "SELECT * FROM tblProduct");
                                            
                                            while ($row = mysqli_fetch_array($result)) {
                                                   $price = $row[3];
                                            }
                                                    
                                                } else {
                                                    $_SESSION[$key] = 1;
                                                }
                                            }

                                            
                                            echo "<h1>Basket</h1>";
                                            foreach ($_SESSION as $key => $value) {
                                                if ($key != 'user') {
                                                
                                                    
                                            
                                                    
                                                    echo "<table  border=1 width=\"500\">";
                                                    echo "<tr>";
                                                    echo "<td width=\"400\">$key</td>";
                                                 //   echo "<td width=\"100\">$value</td>";
                                                    echo "<td> <input type=\"text\"  value=\" $value\" /></td>";
                                                    echo "<td width=\"100\">$price</td>";
                                                    echo "</tr";
                                                    echo "</table>";
                                                }
                                                
                                            }
                                        ?>

                            
                                <tr>
                                    <form action="order.php" method="POST">
                                         <td valign="top">
                                            <input type="submit" value="Order" />
                                        </td>
                                    </form>

                                    <form action="removeProduct.php" method="POST">
                                        <td valign="top">
                                            <input type="submit" value="Update shopping basket" />
                                        </td>
                                    </form>
                                
                                <form action="shop.php" method="POST">
                                        <td valign="top">
                                            <input type="submit" value="Back to shop" />
                                        </td>
                                </form>
                                
                            </tr>
                                
                            </table>
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

    