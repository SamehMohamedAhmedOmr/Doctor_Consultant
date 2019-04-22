<?php require 'includes/header.php'; ?>

	<div id="wrapper">
		<div id="slider-area" class="owl-carousel">
			<div style="background-image: url('../images/01.jpg');">
				<div class="overlay">
					<div class="container">
						<h1> Welcome To <span>Classic 1</span></h1>
						<p>Fusce iaculis sem vitae sapien egestas, ac consectetur lacus eleifend. Aliquam fringilla condimentum ex, sed imperdiet neque tempus viverra. </p>
					</div>
				</div>
			</div>
			<div style="background-image: url('../images/02.jpg');">
				<div class="overlay">
					<div class="container">
						<h1> Welcome To <span>Classic 2</span></h1>
						<p>Fusce iaculis sem vitae sapien egestas, ac consectetur lacus eleifend. Aliquam fringilla condimentum ex, sed imperdiet neque tempus viverra. </p>
					</div>
				</div>
			</div>
			<div style="background-image: url('../images/03.jpg');">
				<div class="overlay">
					<div class="container">
						<h1> Welcome To <span>Classic 3</span></h1>
						<p>Fusce iaculis sem vitae sapien egestas, ac consectetur lacus eleifend. Aliquam fringilla condimentum ex, sed imperdiet neque tempus viverra. </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Start Booking-->
	<div class="booking">
		<div class="container">
			<div>
				<h2>Schedule your appointment online</h2>
				<?php 

		            if(isset($_SESSION['Client'])){
		                if($client->getType() == 2){
		                    echo '<a href="doctorReservations.php">See Your Reservation Table</a>';
		                }
		                else{
		                    echo '<a href="bookOnline.php">Book an Appointment</a>';
		                }
		            }
		            else{
						echo '<a href="bookOnline.php">Book an Appointment</a>';
		            }

				 ?>
			</div>
		</div>
	</div>
	<!-- END Booking-->

	<!-- Start Service -->
	<div class="service">
		<div class="container">
			<div class="row">
				<div class="title">
					<h3>Service We Provide</h3>
					<p>Lorem ipsum dolor consectetuer adipiscing elit sed di nonum nibh euismod tincidunt ut laoreet</p>
				</div>
				<div class="services">
					<img src="../images/Pediatrics.jpg">
					<h4>Pediatrics</h4>
					<p>Suis autem vel eum iriure dolor hdrerit in vulputate velit.</p>
				</div>
				<div class="services">
					<img src="../images/Otolaryngology.jpg">
					<h4>Otolaryngology</h4>
					<p>Suis autem vel eum iriure dolor hdrerit in vulputate velit.</p>
				</div>
				<div class="services">
					<img src="../images/Dermatology.jpg">
					<h4>Dermatology</h4>
					<p>Suis autem vel eum iriure dolor hdrerit in vulputate velit.</p>
				</div>
			</div>
			<div class="row">
				<div class="services">
					<img src="../images/Ophthalmology.jpg">
					<h4>Ophthalmology</h4>
					<p>Suis autem vel eum iriure dolor hdrerit in vulputate velit.</p>
				</div>
				<div class="services">
					<img src="../images/Psychiatry.jpg">
					<h4>Psychiatry</h4>
					<p>Suis autem vel eum iriure dolor hdrerit in vulputate velit.</p>
				</div>
				<div class="services">
					<img src="../images/dentist.jpg">
					<h4>dentist</h4>
					<p>Suis autem vel eum iriure dolor hdrerit in vulputate velit.</p>
				</div>
				<div class="services">
					<img src="../images/pharmacy.jpg">
					<h4>pharmacy</h4>
					<p>Suis autem vel eum iriure dolor hdrerit in vulputate velit.</p>
				</div>	
			</div>
		</div>
	</div>
	<!-- END Service -->

	<!-- Start contact -->
	<div class="contact">
		<div class="overlay">
			<div class="container">
				<div class="info">
					<h2>We are Professional Company to Build Your Life Join With Us</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam noni nibheu tincide laoreet dolore magna aliquam erat volutpat. Ut wisi veniam quis nostr exerci tatioi ullamcorper suscipit lobortis nisl ut aliquip exea come</p>
				</div>
				<div class="contactNumber">
					<div>
						<h2>Contact Us</h2>
						<p>+000 123(456) 88, +000 123(456) 88</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END contact -->

	<!-- Start testimonial -->
	<div class="testimonial">
		<div class="container">
			<div>
				<div>
					<div>
						<h3>Salim Rana , <span>Founder</span></h3>
						<p>Lorem ipsum dolor sit amet consectetuer adipiscing elie sed diam nonuec euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi.</p>
					</div>
				</div>
				<div>
					<div>
						<h3>Adam Lallana , <span>Founder</span></h3>
						<p>Lorem ipsum dolor sit amet consectetuer adipiscing elie sed diam nonuec euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wisi.</p>
					</div>
				</div>
				<div>
					<h2>We take care you and your family</h2>
					<p>Klaritas est etiam processus dynamicus qui sequitur mutation consuetudium</p>
					<button>learn more</button>
				</div>
			</div>
		</div>
	</div>	
	<!-- END testimonial -->	

	<!-- Start Blog -->
	<div class="blog">
		<div class="container">
			<div>
				<div>
					<h3>Our Latest <br> News & Blog</h3>
					<p>Lorem ipsum dolor consectetuer adipiscing elit sed di nonum nibh euismod tincidunt ut laoreet</p>
				</div>
				<div>
					<img src="../images/lp2.jpg">
					<div>
						<h4>20 Sep</h4>
						<h3>Sorem ipsum dolor site nec amet consec adipiscing elite.</h3>
					</div>
					<p>Lorem ipsum dolor sit amet consec adipiscing elit sed diam nonummy ni euismod tinc.</p>

					<button>Read more <i class="fas fa-arrow-right"></i></button>
				</div>
				<div>
					<img src="../images/lp3.jpg">
					<div>
						<h4>20 Sep</h4>
						<h3>Sorem ipsum dolor site nec amet consec adipiscing elite.</h3>
					</div>
					<p>Lorem ipsum dolor sit amet consec adipiscing elit sed diam nonummy ni euismod tinc.</p>

					<button>Read more <i class="fas fa-arrow-right"></i></button>
				</div>
			</div>
		</div>
	</div>
	<!-- END Blog -->

<?php require 'includes/footer.php';
