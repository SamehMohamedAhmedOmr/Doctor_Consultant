<?php require 'includes/header.php'; ?>

<?php require 'includes/image_header.php'; ?>

<?php 

if(!(isset($_SESSION["Client"]))){
	header("Location: index.php");
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
			    	<input id ="title" placeholder="Enter Question Title" name="email" type="text" required>
				</div>
				<div class="form-group">
					<label> Question Content </label>
					<textarea id="postContent" placeholder="Enter Your Question content" required></textarea>
				</div>
				<input id="addPost_submit" type="submit" value="Add Post" class="login_submit">
			</form>
		</div>
	</div>
</div>


<?php require 'includes/footer.php';
