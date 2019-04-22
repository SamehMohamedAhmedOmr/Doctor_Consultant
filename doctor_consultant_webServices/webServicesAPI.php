<?php 

header('Content-Type: application/json;charset=utf-8');
ini_set('display_errors', 1);

require 'includesAll.php';

if ($_SERVER['REQUEST_METHOD']=='GET') {
	// action value = the wanted function
	if(isset($_GET['action']) && $_GET['action'] == 'getAllDoctors'){
		$user = new user();
		$result = $user->getAllDoctors();
		if($result != null){
			$returnedData['data'] = [];
			foreach ($result as $row) {
				array_push($returnedData['data'],$row);
			}
			// convert array to JSON
			$result = json_encode($returnedData['data']);
			echo $result;
		}
		else{
			echo json_encode(array('Error','No Data Found'));
		}
	}
}
/*
elseif ($_SERVER['REQUEST_METHOD']=='POST') {
	echo 'hello from POST REQUEST';
	if(isset($_POST['action']) && $_POST['action'] == 'login' 
        && isset($_POST['email']) && isset($_POST['pass'])){
		$user = new user();
		$result = $user->login($_POST['email'],$_POST['pass']);
		if($result != null){
			$returnedData['data'] = [];
			foreach ($result as $row) {
				array_push($returnedData['data'],$row);
			}
			// convert array to JSON
			//$result = json_encode($returnedData['data']);
			echo json_encode(array('Error','No Data Found'));
		}
		else{
			echo json_encode(array('Error','No Data Found'));
		}
	}
}
*/
?>
