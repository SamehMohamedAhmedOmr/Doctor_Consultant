<?php 

/**
 * 
 */
class User
{
	
	function __construct()
	{
		# code...
	}

	private $name;
	private $id;
	private $mobile;
	private $type;
	private $email;
	private $password;


	function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getMobile() {
        return $this->mobile;
    }

    function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    function getType() {
        return $this->type;
    }

    function setType($type) {
        $this->type = $type;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getPassword() {
        return $this->password;
    }

    function setPassword($password) {
        $this->password = $password;
    }


    public static function login ($E_mail,$password,$option){
        if (filter_var($E_mail, FILTER_VALIDATE_EMAIL) && preg_match("/^[-a-zA-Z0-9_.]*$/",$password) ){

            $db_connection = new Database();
            $query = "SELECT * FROM users WHERE `email` = ? and `password` = ? ";
            $Attributes = array($E_mail,$password);
            $result = $db_connection->select($query,$Attributes);

            if($result){
                $data = $result[0];

                if($data['Type'] == 1){ // admin
                    $user = new User();

                    $user->setName($data['Name']);
                    $user->setEmail($data['email']);
                    $user->setPassword($data['password']);
                    $user->setId($data['user_id']);
                    $user->setMobile($data['Mobile']);
                    $user->setType($data['Type']);
                }

                if($data['Type'] == 2){ // doctor
                    $user = new doctor();

                    $user->setName($data['Name']);
                    $user->setEmail($data['email']);
                    $user->setPassword($data['password']);
                    $user->setId($data['user_id']);
                    $user->setMobile($data['Mobile']);
                    $user->setType($data['Type']);
                    $user->setUniversity($data['University']);
                    $user->setSpecialist($data['Specialist']);
                }

                if($data['Type'] == 3){ // client
                    $user = new patient();

                    $user->setName($data['Name']);
                    $user->setEmail($data['email']);
                    $user->setPassword($data['password']);
                    $user->setId($data['user_id']);
                    $user->setMobile($data['Mobile']);
                    $user->setType($data['Type']);
                }

                $db_connection->disconnect();

                $_SESSION["Client"] = serialize($user);
                if($option=='true'){
                    // remember me button save E-mail & password in Cookie
                    $hour = time()+3600*24*30; // 30 day cookie
                    setcookie('E_mail', $E_mail, $hour);
                    setcookie('pass', $password, $hour);
                }
                    return "login_success";
                }
            }
            return "login_fail";
        }

    public static function logout ($pageType="index.php"){
        session_unset();  //unset variables of the session [All variables]
        session_destroy(); //Destroy the Session [free session No more will be created]
        $hour = time()-3600*24*30*30; // must be more than 30 day
        setcookie('E_mail', $E_mail, $hour); // fire cookie
        setcookie('pass', $password, $hour); // fire cookie
        header("Location: $pageType");
        exit();
    }

    public static function patientSignUp ($name,$E_mail,$password,$mobile,$type){
        $db_connection = new Database();
        if (filter_var($E_mail, FILTER_VALIDATE_EMAIL)){

                $search = "SELECT * FROM users WHERE `email` = ?";
                $attributes = array($E_mail);

                $check = $db_connection->select($search,$attributes);
                if ($check === 0) {
                    $query = "INSERT INTO users (`Name`,`Mobile`,`Type`,`email`,`password`) VALUES (?,?,?,?,?)";

                    $Attributes = array($name,$mobile,$type,$E_mail,$password);
                    $result = $db_connection->insert($query,$Attributes);
                    if ($result) {
                        return "sign_success";
                    }
                    return "sign_fail";
                }
                return "Duplicated_email";
        }
        return "sign_fail";
    }

    public static function doctorSignUp ($name,$E_mail,$password,$mobile,$type,$university,$Specialization){
        $db_connection = new Database();
        if (filter_var($E_mail, FILTER_VALIDATE_EMAIL)){

                $search = "SELECT * FROM users WHERE `email` = ?";
                $attributes = array($E_mail);

                $check = $db_connection->select($search,$attributes);
                if ($check === 0) {
                    $query = "INSERT INTO users (`Name`,`Mobile`,`Type`,`email`,`password`,`University`,`Specialist`) VALUES (?,?,?,?,?,?,?)";

                    $Attributes = array($name,$mobile,$type,$E_mail,$password,$university,$Specialization);
                    $result = $db_connection->insert($query,$Attributes);
                    if ($result) {
                        return "sign_success";
                    }
                    return "sign_fail";
                }
                return "Duplicated_email";
        }
        return "sign_fail";
    }

    
}

 ?>