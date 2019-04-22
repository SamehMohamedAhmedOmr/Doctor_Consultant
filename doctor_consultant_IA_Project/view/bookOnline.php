<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>

<?php 


if(!(isset($_SESSION["Client"]))){

	?>
	<div class="container">
		<div class="errorMessage" style="display: block; line-height: 2.7; margin-bottom: 4%; font-size: 18px;">
			<p>You Should have credential first to Continue <br>
			   Please <a href="login.php" style="text-decoration: none; color:#0f1452;">login</a> or 
			   <a href="register.php" style="text-decoration: none; color:#0f1452;" >register</a> 
				of you don't have account</p>
		</div>
	</div>

<?php 
} 

else {

	if ($client->getType() == 2) {
		header("Location: index.php");
	}

$doc = new Doctor();

$allDoc = $doc->getAllDoctors();

 ?>
	<!-- Start book-online -->
	<div class="book-online">
	    <div class="container">

			<div class="errorMessage">
				<p>ppppppppppp</p>
			</div>

			<center>
				<div>
					<div>
						<div class="book-online-heading">
							<h2 class="panel-title">Schedule Online</h2>
						</div>

						<div class="book-online-body">
							<form accept-charset="UTF-8" role="form">

							    <div class="form-group select-boxes">
							    	<label>Doctor</label>
							    	<select required id="selectDoc">
							    		<?php 

							    			if ($allDoc) {
							    				foreach ($allDoc as $doctor) {
							    					echo '<option value="'.$doctor['user_id'].'">'.$doctor['Name'].'</option>';
							    				}
							    			}
							    		 ?>
							    	</select>
							    </div>
									
								<div class="form-group">	
									 <label class="schedule-date">Select Date</label>
							    	 <div id='jqxcalendar'></div>
								     <input id="log" placeholder="Date" name="password" type="text" readonly>
								</div>

								<div class="form-group hour-date">
									<div>
										<h3>Morning</h3>
										<ul>
											<li>10:00 am</li>
											<li>10:30 am</li>
											<li>11:00 am</li>
											<li>11:30 am</li>
										</ul>
									</div>
									<div>
										<h3>Afternoon</h3>
										<ul>
											<li>12:00 pm</li>
											<li>12:30 pm</li>
											<li>1:00 pm</li>
											<li>1:30 pm</li>
											<li>2:00 pm</li>
											<li>2:30 pm</li>
											<li>3:00 pm</li>
											<li>3:30 pm</li>
											<li>4:00 pm</li>
										</ul>
									</div>
									<div>
										<h3>Evening	</h3>
										<ul>
											<li>No Available Hours</li>
										</ul>
									</div>
								</div>


							    <input id="book_submit" type="submit" value="book-online">
							</form>
						</div>
					</div>
				</div>
			</center>
		</div>
	</div>
	<!-- END book-online -->


<?php } require 'includes/footer.php';
