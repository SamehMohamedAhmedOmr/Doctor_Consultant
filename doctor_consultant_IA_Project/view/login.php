<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>

	<!-- Start login -->
	<div class="login">
	    <div class="container">

			<div class="errorMessage">
				<p>ppppppppppp</p>
			</div>

			<center>
				<div>
					<div>
						<div class="login-heading">
							<h2 class="panel-title">Login via site</h2>
						</div>
						<div class="login-body">
							<form accept-charset="UTF-8" role="form">
							    <div class="form-group">
							    	<input id ="email" placeholder="yourmail@example.com" name="email" type="text" required>
							    </div>
							    <div class="form-group">
							    	<input id="pass" placeholder="Password" name="password" type="password" value="" required>
							    </div>
							    <div class="checkbox">
							    	<label>
							    	    <input id="remember" class="remember" name="remember" type="checkbox" value="Remember Me"> Remember Me
							    	</label>
							    </div>
							    <input type="submit" value="Login" class="login_submit">
							</form>
				            <h4>OR</h4>
				            <input type="submit" value="Login via facebook">
				  			<input type="submit" value="Login via twitter">
				            <input type="submit" value="Login via google">
						</div>
						<div class="register">
							<h3> Don't have an account! <a href="register.html">Sign Up Here</a></h3>
						</div>
					</div>
				</div>
			</center>

		</div>
	</div>
	<!-- END login -->
	
<?php require 'includes/footer.php';
