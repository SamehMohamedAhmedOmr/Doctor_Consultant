<?php 

/**
 * 
 */
class Posts
{
	
	function __construct()
	{
		# code...
	}

	private $subject;
	private $id;
    private $content;

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getSubject() {
        return $this->subject;
    }

    function setSubject($subject) {
        $this->subject = $subject;
    }

    function getContent() {
        return $this->content;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function addPost($title,$content){

        if(isset($_SESSION["Client"])){
            $client = unserialize($_SESSION["Client"]);
        }
        $db_connection = new Database();
        $query = "INSERT INTO posts (`subject`,`content`,`patient_id`) VALUES (?,?,?)";
        $Attributes = array($title,$content,$client->getID());
        $result = $db_connection->insert($query,$Attributes);

        if($result){
            return 'addSuccess';
        }
        else{
            return 'false';
        }
    }

    function getAllPosts(){
        $db_connection = new Database();
        $query = "SELECT * FROM posts";
        $Attributes = NULL;
        return $result = $db_connection->select($query,$Attributes);
    }

    function getOwner($id){
        $db_connection = new Database();
        $query = "SELECT * FROM users WHERE `user_id` = ?";
        $Attributes = array($id);
        return $result = $db_connection->select($query,$Attributes);
    }

    function getPost($postID){
        $db_connection = new Database();
        $query = "SELECT * FROM posts WHERE `post_id` = ?";
        $Attributes = array($postID);
        return $result = $db_connection->select($query,$Attributes);
    }

    function getUserPost($userID){
        $db_connection = new Database();
        $query = "SELECT * FROM posts WHERE `patient_id` = ?";
        $Attributes = array($userID);
        return $result = $db_connection->select($query,$Attributes);
    }

    function deletePost($postID){
        $db_connection = new Database();
        $query = "DELETE FROM `posts` WHERE `post_id` = ?";
        $Attributes = array($postID);
        $result = $db_connection->delete($query,$Attributes);

        if($result){
            return 'delete_success';
        }
        else{
            return 'false';
        }
    }

    function updatePost($title,$content,$postID){
        $db_connection = new Database();
        $query = "UPDATE `posts` SET `subject`=?,`content`=? WHERE `post_id` = ?";
        $Attributes = array($title,$content,$postID);
        $result = $db_connection->update($query,$Attributes);

        if($result){
            return 'edit_success';
        }
        else{
            return 'false';
        }
    }
}

 ?>