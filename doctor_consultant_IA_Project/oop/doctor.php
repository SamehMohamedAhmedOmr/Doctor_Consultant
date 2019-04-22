<?php 

/**
 * 
 */
class Doctor extends User
{
	
	function __construct()
	{
		# code...
	}

	private $university;
	private $specialist;

	function getUniversity() {
        return $this->university;
    }

    function setUniversity($university) {
        $this->university = $university;
    }

    function getSpecialist() {
        return $this->specialist;
    }

    function setSpecialist($specialist) {
        $this->specialist = $specialist;
    }

    function getAllDoctors(){
        $db_connection = new Database();
        $query = "SELECT * FROM users WHERE `type` = ?";
        $attribute = array(2);

        return $result = $db_connection->select($query,$attribute);
    }

    function getReceiveDoctor($id){
        $db_connection = new Database();
        $query = "SELECT * FROM users WHERE `user_id` = ?";
        $attribute = array($id);

        return $result = $db_connection->select($query,$attribute);
    }

    function getAllClinic($doc_id){
        $url = "http://localhost/restfulAPI_IA/API/response.php?action=getallClinic&doc_id=".$doc_id."";
            
        $api = new API();

        $result = $api->CallAPI($url);
        $data = json_decode($result);
        return $data;
    }

    function getOneClinic($clinic){
        $url = "http://localhost/restfulAPI_IA/API/response.php?action=getClinic&clinicID=".$clinic."";
            
        $api = new API();

        $result = $api->CallAPI($url);
        $data = json_decode($result);
        return $data;
    }
}

 ?>