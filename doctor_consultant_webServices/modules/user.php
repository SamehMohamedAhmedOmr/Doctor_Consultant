<?php 

/**
 * 
 */

ini_set('display_errors', 1);

class user
{
	// table_name
	private $tableName = 'users';

	// table cols
	public $name;
	public $id;
	public $mobile;
	public $type;
	public $email;
	public $password;
	public $university;
	public $specialist;

	function __construct()
	{
		
	}

	public function getAllDoctors(){
		$db_connection = new Database();
		$query = "SELECT * FROM ".$this->tableName." WHERE `type` = ?";
		$attribute = array(2);

		return $result = $db_connection->select($query,$attribute);
	}
}
?>
