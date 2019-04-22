	<!-- Start Footer -->
	<div id="footer" class="footer">
		<div class="container">
			<div>
				<div>
					<img src="../images/logo.png">
					<p>Claritas est etiam processu sequitur mutationem consuetud lector Mirum est notare quam littera hum sdecima Eodem modo typi.</p>

					<div>
						<h3>Subscribe To Our Newsletter</h3>
						<form>
							<input type="email" name="email" placeholder="Your email">
							<button type="submit" class="btn btn-success">
	   							 <i class="fab fa-telegram-plane"></i>
							</button>

						</form>
					</div>
				</div>
				<div class="footerSecond">
					<h3>Information</h3>
					<ul>
						<li><a href="index.php"><i class="fas fa-arrow-right"></i> Home</a></li>
						<li><a href="aboutUs.php"><i class="fas fa-arrow-right"></i> About Us</a></li>
						<li><a href="blogs.php"><i class="fas fa-arrow-right"></i> Posts & News</a></li>
						<li><a href="contactUs.php"><i class="fas fa-arrow-right"></i> Contact US</a></li>
					</ul>
				</div>
				<div class="footerThird">
					<h3>recent posts</h3>
					<div class="footerImages">
						<img src="../images/recent1.jpg">
						<div>
							<h5>Completely synergize resource sucking relationships.</h5>
							<h5>On : Feb 12, 2018</h5>
						</div>
					</div>
					<div class="footerImages">
						<img src="../images/recent2.jpg">
						<div>
							<h5>Why I'm running</h5>
							<h5>On : Jul 22, 2018</h5>
						</div>
					</div>
					<div class="footerImages">
						<img src="../images/recent1.jpg">
						<div>
							<h5>Completely synergize resource sucking relationships.</h5>
							<h5>On : Aug 03, 2018</h5>
						</div>
					</div>
				</div>
				<div class="Instagram">
					<h3>Instagram</h3>
					<img src="../images/Instagram1.jpg" alt="ins1">
					<img src="../images/Instagram2.jpg" alt="ins2">
					<img src="../images/Instagram3.jpg" alt="ins3">
					<img src="../images/Instagram4.jpg" alt="ins4">
					<img src="../images/Instagram5.jpg" alt="ins5">
					<img src="../images/Instagram6.jpg" alt="ins6">
					<img src="../images/Instagram7.jpg" alt="ins7">
					<img src="../images/Instagram8.jpg" alt="ins8">
					<img src="../images/Instagram1.jpg" alt="ins8">
				</div>
			</div>
		</div>
	</div>
	<!-- END Footer -->

	<!-- Start CopyRight-->
	<div class="copyRight">
		<div class="container">
			<div>
				<h4>All Rights Reserved © Designed By <span>Sameh14Omr</span></h4>
				<ul class="icons">
					<li><i class="fab fa-facebook-f"></i></li>
					<li><i class="fab fa-google"></i></li>
					<li><i class="fab fa-twitter"></i></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- END CopyRight-->

	<!-- Script TAGS -->
	<!-- jQuery Plugin-->
	<script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- Nice Scroll Plugin-->
	<script type="text/javascript" src="../script/jquery.nicescroll-master/jquery.nicescroll.js"></script>
	<!-- Mixitup Plugin-->
    <script type="text/javascript" src="../script/mixitup/demos/mixitup.min.js"></script>

    <!-- created index-->
    <?php 
    	if ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/index.php' || $_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/'){
    		echo '<!-- OWL CAROUSEL-->
   				  <script src="../script/owl.carousel.min.js"></script>';

    		echo '<script type="text/javascript" src="../script/index.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/login.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/login.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/register.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/register.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/aboutUs.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/aboutUs.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/blogs.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/blogs.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/bookOnline.php' 
    				&& isset($_SESSION["Client"])) {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
				  <script type="text/javascript" src="jqwidgets/jqxdatetimeinput.js"></script>
				  <script type="text/javascript" src="jqwidgets/jqxcalendar.js"></script>
				  <script type="text/javascript" src="jqwidgets/globalization/globalize.js"></script>';
    		echo '<script type="text/javascript" src="../script/bookOnline.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/contactUs.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<!-- Google API MAP-->
				  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAb1qML5aW84D-NJg4bnu3YPoFyNlZ387E&callback=myMap"></script>';
    		echo '<script type="text/javascript" src="../script/contactUs.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/ourTeam.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/ourTeam.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/addPost.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/addPost.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/post.php' || strtok($_SERVER["REQUEST_URI"],'?') === '/doctor_consultant_IA_Project/view/post.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/post.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/myPost.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/myPost.js"></script>';
    	}
        elseif (strtok($_SERVER["REQUEST_URI"],'?') === '/doctor_consultant_IA_Project/view/editPost.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/addPost.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/myReservations.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/myReservations.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/doctorReservations.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/profile.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/profile.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/addClinic.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/addClinic.js"></script>';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/viewClinics.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/viewClinics.js"></script>';
    	}
    	elseif (strtok($_SERVER['REQUEST_URI'],'?')  === '/doctor_consultant_IA_Project/view/editClinic.php') {
    		echo '<script type="text/javascript" src="../script/global.js"></script>';
    		echo '<script type="text/javascript" src="../script/editClinic.js"></script>';
    	}
     ?>
	
</body>
</html>