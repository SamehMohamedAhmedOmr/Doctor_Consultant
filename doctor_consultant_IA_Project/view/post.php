<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>

<?php 
if(isset($_GET['post_id']) && intval($_GET['post_id']))
{
    $posts = new Posts();
    $post = $posts->getPost($_GET['post_id']);
    if($post){
    	$owner = $posts->getOwner($post[0]['patient_id']);
    	$c = new comment();
    	$comments = $c->getAllComments($_GET['post_id']);
    }
    else{
    	header("Location: index.php");
        exit();
    }
}

?>

<div class="blogs">
	<div class="container">

		<div class="errorMessage">
			<p>ppppppppppp</p>
		</div>

		<div class="row">

				<?php 
					if($post){
				?>
		        <!-- Post Content Column -->
		        <div class="col-lg-12">

		          	<!-- Title -->
		          	<h1 class="mt-4 title"><?php echo $post[0]['subject']; ?></h1>

		          	<!-- Author -->
		          	<p class="lead">
		            	by
		            	<a href="#"><i class="fas fa-user-cog"></i> <?php echo $owner[0]['Name']; ?></a>
		          	</p>

		          	<hr>

		          	<!-- Preview Image -->
					<img class="card-img-top" src="http://placehold.it/1108x300" alt="Card image cap">

		          	<hr>

		         	<!-- Post Content -->
		          	<p class="lead Content"><?php echo $post[0]['content']; ?></p>
		          	<hr>

					<?php 

						if(isset($_SESSION["Client"])){
					?>
							<!-- Comments Form -->
				          	<div class="card my-4">
				            	<h5 class="card-header">Leave a Comment:</h5>
				            	<div class="card-body">
				              		<form>
				                		<div class="form-group">
				                  			<textarea id="comment" class="form-control" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 105px;"></textarea>
				                		</div>
				               			<button id="sendComment" data-post="<?php echo $post[0]['post_id']; ?>" type="submit" class="btn btn-primary">Submit</button>
				              		</form>
				            	</div>
				          	</div>

		          			<hr>
					<?php 
						}
					 ?>

					<?php 
					if($comments){
							foreach ($comments as $comment) {
								$owner = $c->getCommentOwner($comment['user_id']);
								?>
								<!-- Single Comment -->
					          	<div class="media mb-4 
					          		<?php if($owner[0]['Type']==3){echo 'patient_comment';}
					          			  elseif ($owner[0]['Type']==2){echo 'doctor_comment';}?>">
					            	<img class="d-flex mr-3 rounded-circle comment-image" src="http://placehold.it/50x50" alt="">
					            	<div class="media-body">
					              		<h5 class="mt-0"><?php echo $owner[0]['Name']; 
					              				if ($owner[0]['Type']==2){echo ' [Doctor]';}?></h5>
					              			<?php echo $comment['comment']; ?>
					            	</div>
					          	</div>
		   <?php			}
   					}
					
			?>

		        </div>

				<?php 
					}
				?>
		</div>

	</div>
</div>


<?php require 'includes/footer.php';
