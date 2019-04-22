<?php
ob_start();
session_start();
require '../oop/includes.php';
if( isset($_COOKIE['E_mail']) && isset($_COOKIE['pass']))
{
    $mail = $_COOKIE['E_mail'];
    $password = $_COOKIE['pass'];
    $return_data = User::login($mail,$password,'true');
}

if(isset($_SESSION["Client"]))
{
    $client = unserialize($_SESSION["Client"]);
}
?>
<!DOCTYPE html>
<html lang="end">
<head>
	<title>Medical Consultant</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keyword" content="Medical">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<link rel="stylesheet" type="text/css" href="../style/Normalize.css">
	<link rel="icon" type="image/png" href="../images/logo.png"/>


	<?php 
    	if ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/index.php' || $_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/'){
    		echo '<link rel="stylesheet" type="text/css" href="../style/index.css">';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/login.php') {
    		echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
    		echo '<link rel="stylesheet" type="text/css" href="../style/login.css">';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/register.php') {
    		echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
    		echo '<link rel="stylesheet" type="text/css" href="../style/register.css">';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/aboutUs.php') {
    		echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
    		echo '<link rel="stylesheet" type="text/css" href="../style/aboutUS.css">';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/blogs.php') {
    		echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
    		echo '<link rel="stylesheet" type="text/css" href="../style/blogs.css">';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/bookOnline.php') {
    		echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
    		echo '<link rel="stylesheet" type="text/css" href="../style/bookOnline.css">';
            echo '<link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" 
        type="text/css">';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/contactUs.php') {
    		echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
    		echo '<link rel="stylesheet" type="text/css" href="../style/contactUs.css">';
    	}
    	elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/ourTeam.php') {
    		echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
    		echo '<link rel="stylesheet" type="text/css" href="../style/ourTeam.css">';
    	}
        elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/addPost.php') {
            echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
            echo '<link rel="stylesheet" type="text/css" href="../style/addPost.css">';
        }
        elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/post.php' || strtok($_SERVER["REQUEST_URI"],'?') === '/doctor_consultant_IA_Project/view/post.php') {
            echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
            echo '<link rel="stylesheet" type="text/css" href="../style/post.css">';
        }
        elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/myPost.php') {
            echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
            echo '<link rel="stylesheet" type="text/css" href="../style/myPost.css">';
        }
        elseif (strtok($_SERVER["REQUEST_URI"],'?') === '/doctor_consultant_IA_Project/view/editPost.php') {
            echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
            echo '<link rel="stylesheet" type="text/css" href="../style/addPost.css">';
        }
        elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/myReservations.php') {
            echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
            echo '<link rel="stylesheet" type="text/css" href="../style/myPost.css">';
        }
        elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/doctorReservations.php') {
            echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
            echo '<link rel="stylesheet" type="text/css" href="../style/myPost.css">';
        }
        elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/profile.php') {
            echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
            echo '<link rel="stylesheet" type="text/css" href="../style/profile.css">';
        }
        elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/addClinic.php') {
            echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
            echo '<link rel="stylesheet" type="text/css" href="../style/login.css">';
        }
        elseif ($_SERVER['REQUEST_URI'] === '/doctor_consultant_IA_Project/view/viewClinics.php') {
            echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
            echo '<link rel="stylesheet" type="text/css" href="../style/myPost.css">';
        }
        elseif (strtok($_SERVER['REQUEST_URI'],'?') === '/doctor_consultant_IA_Project/view/editClinic.php') {
            echo '<link rel="stylesheet" type="text/css" href="../style/global.css">';
            echo '<link rel="stylesheet" type="text/css" href="../style/login.css">';
        }
     ?>
	<!-- Font-Awesome CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Quicksand|Prompt|Montserrat|Josefin+Sans" rel="stylesheet">

    <link rel="stylesheet" href="../style/carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../style/carousel/owl.theme.default.min.css">

</head>
<body>

	<!-- Start navbar -->
	<div class="navbar adaptiveNavbar">
	 	<div class="imgLogo"><a href="index.php"><img src="../images/logo.png"</a></div>
	 	<ul class="menu">
	 		<li><a href="index.php">Home</a></li>
 			<li><a href="blogs.php">Posts & News</a></li>
	 		<li><a href="ourTeam.php">Our Team</a></li>
	 		<li><a href="aboutUs.php">About us</a></li>
            <?php 
            if(isset($_SESSION['Client'])){
                if($client->getType() == 2){
                    echo '<li><a href="contactUs.php">Contact Us</a></li>';
                }
                else{
                    echo '<li><a href="bookOnline.php">Book Online</a></li>';
                }
            }
            else{
                echo '<li><a href="bookOnline.php">Book Online</a></li>';   
            }
            ?>
	 	</ul>


	 	<div class="navAction">
            <?php 
                if(isset($_SESSION['Client'])){
                    ?>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a class="anchor_dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fas fa-user-tie"></i> &nbsp; &nbsp; &nbsp;<?php echo $client->getName() ?> 
                            <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                                <li><a href="profile.php">Profile</a></li>
                                <?php 
                                    if ($client->getType() == 2) {   
                                        ?>
                                        <li><a href="doctorReservations.php">Reservations</a></li>
                                        <li class="divider"></li>
                                        <li><a href="addClinic.php">ِAdd Clinic</a></li>
                                        <li><a href="viewClinics.php">ِManage Clinic</a></li>
                                        <?php
                                    }

                                    if ($client->getType() == 3) {
                                        ?>
                                        <li><a href="addPost.php">Add Question</a></li>
                                        <li><a href="myPost.php">My Posts</a></li>

                                        <li class="divider"></li>
                                        <li><a href="myReservations.php">My Reservations</a></li>
                                        <?php
                                    } 

                                 ?>

                                <li class="divider"></li>
                                <li>
                                    <a href="logout.php">
                                        <i class="fas fa-sign-out-alt"></i> &nbsp; &nbsp; &nbsp; Logout
                                    </a>
                                </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <?php 
                }
                else{
                    echo "<ul class=\"menu site_interact\">
                            <li><a href=\"register.php\"><i class=\"fas fa-user\"></i> Sign Up</a></li>
                            <li><a href=\"login.php\"><i class=\"fas fa-sign-in-alt\"></i> login</a></li>
                          </ul>";
                }
             ?>
	 	</div>
	</div>
	<!-- END navbar -->

    <div class="clearfix"></div>
	
	<!-- -->
	<div class="fixedScroll">
		<i class="fas fa-arrow-up"></i>
	</div>


