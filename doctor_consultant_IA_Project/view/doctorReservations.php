<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>

<?php 

if(isset($_SESSION["Client"]))
{
    $reservation = new Reservation();

	$allReservations = $reservation->getDoctorReservations();
}
else{
	header("Location: index.php");
}

?>

<div class="blogs">
	<div class="container">

<?php 
	if($allReservations){ ?>
		<table class="table table-bordered">
		  	<thead>
		    	<tr>
		      		<th scope="col">#</th>
		      		<th scope="col">Patient</th>
		      		<th scope="col">Date</th>
		      		<th scope="col">Time</th>
		    	</tr>
		 	</thead>
		  	<tbody>
				<?php 
					$count = 1;
					foreach ($allReservations as $receive) {
						$doc = new Doctor();
						$doctor = $doc->getReceiveDoctor($receive['patient_id']);
				 ?>
						<tr>
					    	<th scope="row"><?php echo $count; ?></th>
					      	<td><?php echo $doctor[0]['Name']; ?></td>
					   		<td><?php echo $receive['date']; ?></td>
					   		<td><?php echo $receive['time']; ?></td>
				    	</tr>
				<?php 	$count++;
					}	
				?>
		  	</tbody>
		</table>

<?php }
	else{
		?>
		<div class="errorMessage" style="display: block; line-height: 2.7; margin-bottom: 4%; font-size: 18px;">
				<p>You didn't have any Reservation Yet</p>
		</div>
<?php  
	}
 ?>
	</div>
</div>


<?php require 'includes/footer.php';
