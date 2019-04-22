<?php 

/**
 * 
 */
class Reservation
{
	
	function __construct()
	{
		# code...
	}

	private $time;
	private $id;

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getTime() {
        return $this->time;
    }

    function setTime($time) {
        $this->time = $time;
    }

    function booking($doc,$date,$time){

        if(isset($_SESSION["Client"])){
            $client = unserialize($_SESSION["Client"]);
        }
        $db_connection = new Database();

        $QUERY = "SELECT * FROM rerservations WHERE `doctor_id` = ? AND `date` = ? AND `patient_id` = ? ";
        $attr = array($doc,$date,$client->getID());
        $result = $db_connection->select($QUERY,$attr);

        if($result == 0){
            $query = "INSERT INTO rerservations (`doctor_id`,`date`,`time`,`patient_id`) VALUES (?,?,?,?)";
            $Attributes = array($doc,$date,$time,$client->getID());
            $result = $db_connection->insert($query,$Attributes);

            if($result){
                return 'book_success';
            }
            else{
                return 'false';
            }
        }
        else{
            return 'previous_book';
        }
    }

    function getClientReservations(){

        if(isset($_SESSION["Client"])){
            $client = unserialize($_SESSION["Client"]);
        }
        $db_connection = new Database();

        $QUERY = "SELECT * FROM rerservations WHERE `patient_id` = ? ";
        $attr = array($client->getID());
        $result = $db_connection->select($QUERY,$attr);

        return $result;
    }

    function getDoctorReservations(){

        if(isset($_SESSION["Client"])){
            $client = unserialize($_SESSION["Client"]);
        }
        $db_connection = new Database();

        $QUERY = "SELECT * FROM rerservations WHERE `doctor_id` = ? ";
        $attr = array($client->getID());
        $result = $db_connection->select($QUERY,$attr);

        return $result;
    }

    function deleteRerservations($receiveID){
        $db_connection = new Database();
        $query = "DELETE FROM `rerservations` WHERE `reservation_id` = ?";
        $Attributes = array($receiveID);
        $result = $db_connection->delete($query,$Attributes);

        if($result){
            return 'delete_success';
        }
        else{
            return 'false';
        }
    }


}

 ?>