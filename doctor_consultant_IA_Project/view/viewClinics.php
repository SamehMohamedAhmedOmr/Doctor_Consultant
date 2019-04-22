<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>

<?php 

if(isset($_SESSION["Client"]))
{
    $doc = new Doctor();

	$allClinic = $doc->getAllClinic($client->getID());
}
else{
	header("Location: index.php");
}

?>

<div class="blogs">
	<div class="container">

		<div class="errorMessage">
			<p>ppppppppppp</p>
		</div>

	<?php 
		if($allClinic){
			?>
			<table class="table table-bordered">
			  	<thead>
			    	<tr>
			      		<th scope="col">#</th>
			      		<th scope="col">Address</th>
			      		<th scope="col">Edit</th>
			      		<th scope="col">Delete</th>
			    	</tr>
			 	</thead>
			  	<tbody>
					<?php 
						$count = 1;
						foreach ($allClinic as $clinic) {
					 ?>
							 <tr>
					      		<th scope="row"><?php echo $count; ?></th>
					      		<td style="color:blue; cursor: pointer;"><?php echo $clinic->address; ?></a></td>
						      	<td><a class="edit" href="editClinic.php?clinicID=<?php echo $clinic->clinic_id; ?>"><i class="fas fa-external-link-alt"></i></a></td>
						      	<td><a class="delete" href="" data-d='<?php echo $clinic->clinic_id; ?>'><i class="fas fa-trash-alt"></i></a></td>
						    </tr>
					<?php 	$count++;
						}					
					?>
			  	</tbody>
			</table>
	<?php  
		}
		else{
	?>
		<div class="errorMessage" style="display: block; line-height: 2.7; margin-bottom: 4%; font-size: 18px;">
				<p>You didn't have any Post Yet</p>
		</div>
	<?php  
		}
	 ?>


	</div>
</div>


<?php require 'includes/footer.php';
