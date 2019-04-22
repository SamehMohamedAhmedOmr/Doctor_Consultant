<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>

	<!-- Start register -->
	<div class="register">
	    <div class="container">


	    	<div class="errorMessage">
				<p>ppppppppppp</p>
			</div>


			<center>
				<div>
					<div>
						<div class="register-heading">
							<h2 class="panel-title">Sign up</h2>
						</div>
						
						<div class="sign-up-tabs">
							<div class="selected-sign-up-tab" data-toggle="patient">
								Sign up as Patient
							</div>
							<div data-toggle="doctor">
								Sign up as Doctor
							</div>
						</div>

						<div>
							<!-- Patient form -->
							<div id="patient" class="register-body">
								<form accept-charset="UTF-8" role="form">
									<div class="form-group">
								    	<input id="name" placeholder="Name" name="Name" type="text" required>
								    </div>
								    <div class="form-group">
								    	<input id="email" placeholder="yourmail@example.com" name="email" type="text" required>
								    </div>
								    <div class="form-group">
								    	<input id="password" placeholder="Password" name="password" type="password" value="" required>
								    </div>

								    <div class="form-group">
								    	<input  id="mobile" placeholder="Mobile" name="mobile" type="text" value="" required>
								    </div>

								    <div class="checkbox">
								    	<input id="agree" class="remember" name="remember" type="checkbox" value="Remember Me" required>
								    	<label>
								    	     I agree with The <span>Terms of Condtions</span>
								    	</label>
								    </div>
								    <input id="patient_submit" type="submit" value="Sign UP">
								</form>
							</div>

							<!-- Doctor form -->
							<div id="doctor" class="register-body">
								<form accept-charset="UTF-8" role="form">
									<div class="form-group">
								    	<input id="name-doc" placeholder="Name" name="Name" type="text" required>
								    </div>
								    <div class="form-group">
								    	<input id="email-doc" placeholder="yourmail@example.com" name="email" type="text" required>
								    </div>
								    <div class="form-group">
								    	<input id="password-doc" placeholder="Password" name="password" type="password" value="" required>
								    </div>

								    <div class="form-group">
								    	<input id="mobile-doc" placeholder="Mobile" name="mobile" type="text" value="" required>
								    </div>

								    <div class="form-group select-boxes">
								    	<label>Your University</label>
								    	<select required id="univerisity">
								    		<option value="cairo">Cairo</option>
								    		<option value="ain-shams">Ain Shams</option>
								    		<option value="helwan">Helwan</option>
								    		<option value="suez">Suez</option>
								    		<option value="monoufia">Monoufia</option>
								    		<option value="banha">Banha</option>
								    		<option value="alex">Alexandria</option>
								    	</select>
								    </div>

								    <div class="form-group select-boxes">
								    	<label>Specialization</label>
								    	<select required id="Specialization">
								    		<option value="Accident and emergency medicine">Accident and emergency medicine</option>
								    		<option value="Biological hematology">Biological hematology</option>
								    		<option value="Clinical chemistry">Clinical chemistry</option>
								    		<option value="Dental, oral and maxillo-facial surgery">Dental, oral and maxillo-facial surgery</option>
								    		<option value="General surgery">General surgery</option>
								    		<option value="Immunology">Immunology</option>
								    		<option value="Laboratory medicine">Laboratory medicine</option>
								    		<option value="Nuclear medicine">Nuclear medicine</option>
								    		<option value="Ophthalmology">Ophthalmology</option>
								    		<option value="Pharmacology">Pharmacology</option>
								    		<option value="Respiratory medicine">Respiratory medicine</option>
								    		<option value="Stomatology">Stomatology</option>
								    		<option value="Urology">Urology</option>
								    	</select>
								    </div>

								    <div class="checkbox">
								    	<input id="agree-doc" class="remember" name="remember" type="checkbox" value="Remember Me" required>
								    	<label>
								    	     I agree with The <span>Terms of Condtions</span>
								    	</label>
								    </div>
								    <input id="doctot_submit" type="submit" value="Sign UP">
								</form>
							</div>
						</div>
					</div>
				</div>
			</center>
		</div>
	</div>
	<!-- END register -->

<?php require 'includes/footer.php';
