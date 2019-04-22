<?php 
session_start();
	require '../oop/includes.php';

	if ($_SERVER['REQUEST_METHOD']=='GET') {
		if ($_GET['action']=='addPost' && isset($_GET['title']) && isset($_GET['content']) ) {
			$title = $_GET['title'];
			$content = $_GET['content'];
			
			$post = new Posts();

			echo $post->addPost($title,$content);
		}

		if ($_GET['action']=='deletePOST' && isset($_GET['postID'])) {
			$postID = $_GET['postID'];
			
			$post = new Posts();

			echo $post->deletePost($postID);
		}

		if ($_GET['action']=='editPost' && isset($_GET['title']) && isset($_GET['content']) && isset($_GET['id']) ) {

			$title = $_GET['title'];
			$content = $_GET['content'];
			$id = $_GET['id'];
			
			$post = new Posts();

			echo $post->updatePost($title,$content,$id);
		}
		
		if ($_GET['action']=='sendComment' && isset($_GET['postID']) && isset($_GET['comment']) ) {

			$postId = $_GET['postID'];
			$comment = $_GET['comment'];
			
			$commentObj = new comment();

			echo $commentObj->addComment($postId,$comment);
		}

		if ($_GET['action']=='book_online' && isset($_GET['doc']) && isset($_GET['date']) && isset($_GET['time']) ) {

			$doc = $_GET['doc'];
			$date = $_GET['date'];
			$time = $_GET['time'];

			
			$reservation = new Reservation();

			echo $reservation->booking($doc,$date,$time);
		}

		if ($_GET['action']=='deleteReservation' && isset($_GET['receiveID'])) {
			$postID = $_GET['receiveID'];
			
			$post = new Reservation();

			echo $post->deleteRerservations($postID);
		}

		// calling API of [C]rud
		if ($_GET['action']=='addClinic' && isset($_GET['address'])) {
			$address = $_GET['address'];
			if(isset($_SESSION["Client"])){
	            $client = unserialize($_SESSION["Client"]);
	        }
	        $url = "http://localhost/restfulAPI_IA/API/response.php?action=insertClinic&doc_id=".$client->getID()."&address=".$address."";
			
			$api = new API();

			$result = $api->CallAPI($url);
			$data = json_decode($result);
			echo $data->data;
		}

		// calling API of cr[U]d
		if ($_GET['action']=='editClinic' && isset($_GET['address']) && isset($_GET['clinicID'])) {
			$address = $_GET['address'];
			$clinicID = $_GET['clinicID'];
			if(isset($_SESSION["Client"])){
	            $client = unserialize($_SESSION["Client"]);
	        }
	        $url = "http://localhost/restfulAPI_IA/API/response.php?action=updateClinic&clinicID=".$clinicID."&address=".$address."";
			
			$api = new API();

			$result = $api->CallAPI($url);
			$data = json_decode($result);
			echo $data->data;
		}

		// calling API of cru[d]
		if ($_GET['action']=='deleteClinic' && isset($_GET['clinicID'])) {
			$clinicID = $_GET['clinicID'];

	        $url = "http://localhost/restfulAPI_IA/API/response.php?action=deleteClinic&clinicID=".$clinicID."";
			
			$api = new API();

			$result = $api->CallAPI($url);
			$data = json_decode($result);
			echo $data->data;
		}
	}

	if ($_SERVER['REQUEST_METHOD']=='POST') {

		if ($_POST['action']=='login' && isset($_POST['email']) && isset($_POST['pass']) ) {
			$email = $_POST['email'];
			$password = $_POST['pass'];
			$remember = $_POST['remember'];
			
			echo User::login($email,$password,$remember);
		}

		if ($_POST['action']=='patient_signup' && isset($_POST['email']) && isset($_POST['pass']) 
			&& isset($_POST['name'])   && isset($_POST['mobile']) ) {

			$email = $_POST['email'];
			$password = $_POST['pass'];
			$name = $_POST['name'];
			$mobile = $_POST['mobile'];

			echo User::patientSignUp($name,$email,$password,$mobile,3);
		}

		if ($_POST['action']=='doctor_signup' && isset($_POST['email']) && isset($_POST['pass']) 
			&& isset($_POST['name']) && isset($_POST['mobile']) && isset($_POST['univerisity']) 
			&& isset($_POST['specialization'])  ){
			$email = $_POST['email'];
			$password = $_POST['pass'];
			$name = $_POST['name'];
			$mobile = $_POST['mobile'];
			$univerisity = $_POST['univerisity'];
			$Specialization = $_POST['specialization'];

			echo User::doctorSignUp($name,$email,$password,$mobile,2,$univerisity,$Specialization);
		}
	}



 ?>