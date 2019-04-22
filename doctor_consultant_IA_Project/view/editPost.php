<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>

<?php 

if(!(isset($_SESSION["Client"]))){
	header("Location: index.php");
}

if(isset($_GET['post_id']) && intval($_GET['post_id']))
{
    $posts = new Posts();
    $post = $posts->getPost($_GET['post_id']);
    if($post){
    	$owner = $posts->getOwner($post[0]['patient_id']);
    	if($post[0]['patient_id'] != $client->getID()){
    		header("Location: index.php");
        	exit();
    	}
    }
    else{
    	header("Location: index.php");
        exit();
    }
}

?>

<div class="addPost">
	<div class="container">

		<div class="errorMessage">
			<p>ppppppppppp</p>
		</div>

		<div class="login-body">
			<form accept-charset="UTF-8" role="form">
				<div class="form-group">
					<label> Question Title </label>
			    	<input id ="title" placeholder="Enter Question Title" name="email" type="text" required
			    	 value="<?php echo $post[0]['subject'] ?>" readonly>
				</div>
				<div class="form-group">
					<label> Question Content </label>
					<textarea id="postContent" placeholder="Enter Your Question content" required readonly">
						<?php echo $post[0]['content'] ?></textarea>
				</div>

				<input id="edit" type="submit" value="edit" class="login_submit">
				<input id="editPost_submit" data-id='<?php echo $post[0]['post_id'] ?>' type="submit" value="submit" class="login_submit hidden">
			</form>
		</div>
	</div>
</div>


<?php require 'includes/footer.php';
