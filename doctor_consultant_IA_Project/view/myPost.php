<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>

<?php 

if(isset($_SESSION["Client"]))
{
    $posts = new Posts();

	$allPOSTS = $posts->getUserPost($client->getID());
}
else{
	header("Location: index.php");
}

?>

<div class="blogs">
	<div class="container">

	<?php 
		if($allPOSTS){
			?>
			<table class="table table-bordered">
			  	<thead>
			    	<tr>
			      		<th scope="col">#</th>
			      		<th scope="col">Title</th>
			      		<th scope="col">Edit</th>
			      		<th scope="col">Delete</th>
			    	</tr>
			 	</thead>
			  	<tbody>
					<?php 
						$count = 1;
						foreach ($allPOSTS as $post) {
					 ?>
							 <tr>
					      		<th scope="row"><?php echo $count; ?></th>
					      		<td><a href="post.php?post_id=<?php echo $post['post_id']; ?>"><?php echo $post['subject']; ?></a></td>
						      	<td><a class="edit" href="editPost.php?post_id=<?php echo $post['post_id']; ?>"><i class="fas fa-external-link-alt"></i></a></td>
						      	<td><a class="delete" href="" data-d='<?php echo $post['post_id']; ?>'><i class="fas fa-trash-alt"></i></a></td>
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
