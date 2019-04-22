<?php 

/**
 * 
 */
class comment
{
	
	function __construct()
	{
		# code...
	}

	private $comment;
	private $id;

	function getComment() {
        return $this->comment;
    }

    function setComment($comment) {
        $this->comment = $comment;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function addComment($postId,$comment){

        if(isset($_SESSION["Client"])){
            $client = unserialize($_SESSION["Client"]);
        }
        $db_connection = new Database();
        $query = "INSERT INTO comments (`post_id`,`user_id`,`comment`) VALUES (?,?,?)";
        $Attributes = array($postId,$client->getID(),$comment);
        $result = $db_connection->insert($query,$Attributes);

        if($result){
            return 'addCommentSuccessfully';
        }
        else{
            return 'false';
        }
    }

    function getAllComments($postId){
        $db_connection = new Database();
        $query = "SELECT * FROM comments WHERE `post_id` = ?";
        $Attributes = array($postId);
        return $result = $db_connection->select($query,$Attributes);
    }

    function getCommentOwner($id){
        $db_connection = new Database();
        $query = "SELECT * FROM users WHERE `user_id` = ?";
        $Attributes = array($id);
        return $result = $db_connection->select($query,$Attributes);
    }


}

 ?>