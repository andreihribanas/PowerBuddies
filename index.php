<!DOCTYPE html>
	<!--This page was written by Andrei Hribanas.-->
<?php require 'includes/header.html'; ?>

		<div id="center_page"> <!-- CENTRES THE WEB PAGE -->
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
			
			<!-- TOP NAVIGATION BAR & SEARCH SECTION -->
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
                        <!-- END OF TOP NAVIGATION BAR & SEARCH SECTION -->
			
			<section id="page_section"> <!-- THE MAIN SECTION OF THE WEBPAGE-->	
			
			 <!-- ===== FLOW ===== -->
                                <div id="contentFlow" class="ContentFlow">
                                    <!-- should be place before flow so that contained images will be loaded first -->
                                    <div class="loadIndicator"><div class="indicator"></div></div>

                                    <div class="flow">

                                        <div class="item">
                                            <img class="content" src="images/home1.png"/>
                                            <div class="caption">pic0: some stripes</div>
                                        </div>
                                        <div class="item">
                                            <img class="content" src="images/home2.png"/>
                                            <div class="caption">pic1: some stripes</div>
                                        </div>
                                        <div class="item">
                                            <img class="content" src="images/home3.png"/>
                                            <div class="caption">pic2: some stripes</div>
                                        </div>
                                        <div class="item">
                                            <img class="content" src="images/home4.png"/>
                                            <div class="caption">pic1: some stripes</div>
                                        </div>

                                        <div class="item">
                                            <img class="content" src="images/home1.png"/>
                                            <div class="caption">pic0: some stripes</div>
                                        </div>
                                        <div class="item">
                                            <img class="content" src="images/home2.png"/>
                                            <div class="caption">pic1: some stripes</div>
                                        </div>
                                        <div class="item">
                                            <img class="content" src="images/home3.png"/>
                                            <div class="caption">pic2: some stripes</div>
                                        </div>
                                        <div class="item">
                                            <img class="content" src="images/home4.png"/>
                                            <div class="caption">pic1: some stripes</div>
                                        </div>

                                        <div class="item">
                                            <img class="content" src="images/home1.png"/>
                                            <div class="caption">pic0: some stripes</div>
                                        </div>
                                        <div class="item">
                                            <img class="content" src="images/home2.png"/>
                                            <div class="caption">pic1: some stripes</div>
                                        </div>
                                        <div class="item">
                                            <img class="content" src="images/home3.png"/>
                                            <div class="caption">pic2: some stripes</div>
                                        </div>
                                        <div class="item">
                                            <img class="content" src="images/home4.png"/>
                                            <div class="caption">pic1: some stripes</div>
                                        </div>

                                    </div>
                                    <div class="globalCaption"></div>
                                    <div class="scrollbar">
                                        <div class="slider"><div class="position"></div></div>
                                    </div>

                                </div>
                        <!--****************** END FLOW ******************************* -->


			<div class="home_USP">
					<p class="home_USP_text">
                        Our products are using both solar energy and artificial light to be able to generate power in order to charge mobile devices which we have made portable. By offering the posibility to function using artificial 
                        light allows consumers to be able to charge their mobile devices practically anywhere. This is particularly useful for 
                        our target market as they will not be limited to the area they can charge their devices. Our company strongly believes that this 
                        revolutionary energy source and would become popular within our customers. With the businesses already on the move for 
                        new energy sources and consumers looking for easier, affordable, everyday solutions to save money will allow our company 
                        to prosper on the market.
					</p>
				</div>
		
				
			</section> 


                    <!-- BOTTOM NAVIGATION BAR SECTION -->
			<footer>
				<div id="page_footer"> <!-- PAGE FOOTER -->
					<nav id="bottom_nav">  <!-- BOTTOM NAVIGATION BAR -->
						<a href="terms_conditions.html"><input type="submit" value="Terms and conditions" class="navButton"></a>
						<a href="careers.html"><input type="submit" value="Careers" class="navButton"></a>
						<a href="accesibility.html"><input type="submit" value="Accessibility" class="navButton"></a>
						<a href="faq.html"><input type="submit" value="F.A.Q." class="navButton"></a>
					</nav>					
			
					<div id="social_networking_block"> <!-- SOCIAL NETWORKING AREA (SOCIAL NETWORKS ICONS) -->
                                            <h5 id="message_text"> CONNECT WITH US </h5>
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
                    <!-- END OF BOTTOM NAVIGATION BAR SECTION -->
			
			<div id="copywright">
					<h6> &copy; 2014 COPYWRIGHT POWER BUDDIES INC. All rights reserved. </h6>
					<h6> Designed by Andrei Hribanas </h6>
			</div>
				
		</div> <!-- center maker div -->
	</body>
</html>
