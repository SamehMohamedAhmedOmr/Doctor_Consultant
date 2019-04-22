	<div class="page-header adaptive-page-header">
		<div class="overlay">
			<div class="container">
				<h3>
					<?php 
						if ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/login.php') {
				    		echo 'Login';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/register.php') {
				    		echo 'Sign Up';
				    	}
						elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/aboutUs.php') {
				    		echo 'About Us';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/blogs.php') {
				    		echo 'Posts & News';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/bookOnline.php') {
				    		echo 'Online Booking';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/contactUs.php') {
				    		echo 'Contact Us';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/ourTeam.php') {
				    		echo 'Our Team';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/addPost.php') {
				    		echo 'Ask Question';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/post.php' || strtok($_SERVER["REQUEST_URI"],'?') === '/doctor_consultant_IA_Project/view/post.php') {
				    		echo 'Posts & News';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/myPost.php') {
				    		echo 'My Post';
				    	}
				    	elseif (strtok($_SERVER["REQUEST_URI"],'?') === '/doctor_consultant_IA_Project/view/editPost.php') {
				    		echo 'Edit Post';
						}
						elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/myReservations.php') {
				    		echo 'My Reservations';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/doctorReservations.php') {
				    		echo 'My Reservations';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/profile.php') {
				    		echo 'My Profile';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/addClinic.php') {
				    		echo 'Add Clinic';
				    	}
				    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/viewClinics.php') {
				    		echo 'My Clinics';
				    	}
				    	elseif (strtok($_SERVER['REQUEST_URI'],'?')  === '/doctor_consultant_IA_Project/view/editClinic.php') {
				    		echo 'Edit Clinic';
				    	}
					 ?>
				</h3>
			</div>
		</div>
	</div>
	