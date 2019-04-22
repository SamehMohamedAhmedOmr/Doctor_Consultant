<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>

<?php 
if(isset($_GET['clinicID']) && intval($_GET['clinicID']))
{
    $doc = new Doctor();
    $clinic = $doc->getOneClinic($_GET['clinicID']);
    if(!$clinic){
    	header("Location: index.php");
        exit();
    }
}

?>

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
							<h2 class="panel-title">Edit Clinic</h2>
						</div>
						<div class="login-body">
							<form accept-charset="UTF-8" role="form" style="border:none;">
							    <div class="form-group">
							    	<input id ="address" placeholder="address" name="address" type="text" required
							    		value="<?php echo $clinic[0]->address; ?>" readonly>
							    </div>
							    <input id="edit" type="submit" value="edit" class="edit">
							    <input id="editClinic_submit" type="submit" value="submit" class="submit hidden" data-id = "<?php echo $clinic[0]->clinic_id; ?>">

							</form>
						</div>
					</div>
				</div>
			</center>

		</div>
	</div>
	<!-- END login -->


<?php require 'includes/footer.php';
