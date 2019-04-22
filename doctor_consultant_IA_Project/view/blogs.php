<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>

<?php 

$posts = new Posts();

$allPOSTS = $posts->getAllPosts();

?>

<div class="blogs">
	<div class="container">

		<div class="row">

		        <?php 
					if($allPOSTS){
						foreach ($allPOSTS as $post) {
							$owner = $posts->getOwner($post['patient_id']);
							$c = new comment();
    						$comments = $c->getAllComments($post['post_id']);
							?>
							          <!-- Blog Post -->
				            <div class="card mb-4 post">
				         	    <img class="card-img-top" src="http://placehold.it/1108x300" alt="Card image cap">
				            	<div class="card-body details">
				              		<h2 class="card-title"><?php echo $post['subject']; ?></h2>
				              		<div class="owner">
										<span><i class="fas fa-user-cog"></i> &nbsp; <?php echo $owner[0]['Name']; ?></span>
										<span><i class="far fa-comments"></i> &nbsp; <?php if($comments){echo sizeof($comments);} else{echo 0;} ?> Comments</span>
									</div>
				              		<p id="" class="card-text"><?php echo $post['content']; ?></p>
				              		<a href="post.php?post_id=<?php echo $post['post_id']; ?>" class="btn btn-primary">Read More →</a>
				            	</div>
				          	</div>
							<?php 
						}
					}
				?>

		</div>
	</div>
</div>


<?php require 'includes/footer.php';
