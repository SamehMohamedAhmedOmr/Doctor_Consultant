<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>


<?php 

if(!(isset($_SESSION["Client"]))){
	header("Location: index.php");
}
 ?>
<div class="container">
    <div class="row">
	    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
	   
	        <div class="panel panel-info" style="width: 850px;">
	            <div class="panel-heading">
	              	<h3 class="panel-title"><?php echo $client->getName(); ?></h3>
	            </div>

	            <div class="panel-body">
	              	<div class="row">
	                	<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/profile.png" class="img-circle img-responsive"> </div>
	                
	                	<div class=" col-md-9 col-lg-9 "> 
	                  		<table class="table table-user-information">
	                    		<tbody>
									<?php 

										if ($client->getType() == 2) {
											?>
										<tr>
				                        	<td>University:</td>
				                        	<td><?php echo $client->getUniversity(); ?></td>
				                      	</tr>
				                      	<tr>
				                        	<td>Specialist:</td>
				                        	<td><?php echo $client->getSpecialist(); ?></td>
				                      	</tr>
									<?php
										}
									 ?>
	                       			<tr>
				                       	<td>Email</td>
				                       	<td><a href="<?php echo $client->getEmail(); ?>"><?php echo $client->getEmail(); ?></a></td>
				                   	</tr>
				                    <tr>
					  	                <td>Password</td>
					                    <td><?php echo $client->getPassword(); ?></td>
				                   	</tr>
	                         		<tr>
				                      	<td>Phone Number</td>
				                       	<td><?php echo $client->getMobile(); ?></td>
	                      			</tr>
	                     
	                    		</tbody>
	                  		</table>
	                	</div>
	             	</div>	
	            </div>

                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                        <a data-original-title="Edit this user" href="#" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                    </span>
                </div>
	            
	        </div>
	    </div>
    </div>
</div>
	
<?php require 'includes/footer.php';
