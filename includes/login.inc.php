<?php

ob_start();
session_start();
include_once 'dbh.inc.php';



$error = false;

if( isset($_POST['btn-login']) ) {

 // prevent sql injections/ clear user invalid inputs
 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['password']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 // prevent sql injections / clear user invalid inputs

 if(empty($email)){
	$error = true;
	$emailError = "Please enter your email address.";
 } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
	$error = true;
	$emailError = "Please enter valid email address.";
 }

 if(empty($pass)){
	$error = true;
	$passError = "Please enter your password.";
 }


 // if there's no error, continue to login
 if (!$error) {

	$password = hash('sha256', $pass); // password hashing using SHA256

	$res = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

	$row = mysqli_fetch_array($res);

	$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row



	if ($count == 1 && $row['password']==$password)
  {
   $_SESSION['userid'] = $row['userid'];
	 $_SESSION['name'] = $row['name'];
   $_SESSION['birthday'] = $row['birthday'];
   $_SESSION['description'] = $row['description'];
   $_SESSION['email'] = $row['email'];
   $_SESSION['photo_url'] = $row['photo_url'];

   header ('Location: pages/posts.php');
   exit();
	}
  else
  {
	 $errMSG = "<span style='color:red;'>Foutieve invoer, Probeer nog eens...</span>";
	}
 }
}
?>
