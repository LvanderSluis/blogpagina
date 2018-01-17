<?php

error_reporting(E_ALL);
ob_start();
session_start();
if( isset($_SESSION['email'])!="" ){
 header("Location: ../index.php");
}

include_once '../includes/dbh.inc.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
$about = mysqli_real_escape_string($conn, $_POST['about']);
$image = mysqli_real_escape_string($conn, $_POST['image']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// var_dump($_POST);
// exit();
$error = false;

if (isset($_POST['submit'])){

 // clean user inputs to prevent sql injections
 $name = trim($_POST['name']);
 $name = strip_tags($name);
 $name = htmlspecialchars($name);

 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);


 $password = trim($_POST['password']);
 $password  = strip_tags($password );
 $password  = htmlspecialchars($password);

 // basic name validation
 if (empty($name)) {

  $error = true;
  $nameError = "Please enter your full name.";
 } else if (strlen($name) < 3) {
  $error = true;
  $nameError = "Name must have atleast 3 characters.";
 } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
  $error = true;
  $nameError = "Name must contain alphabets and space.";
 }

 //basic email validation

 if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";

 } else {

  // check email exist or not
  $query = "SELECT * FROM users WHERE email='$email'";

  $result = mysqli_query($conn, $query);

  $count = mysqli_num_rows($result);
  if($count!=0){
   $error = true;
   $emailError = "Provided Email is already in use.";
  }
 }
 // password validation
 if (empty($password)){
  $error = true;
  $passError = "Please enter password.";
 } else if(strlen($password) < 6) {
  $error = true;
  $passError = "Password must have atleast 6 characters.";
 }

 // password encrypt using SHA256();
 $password = hash('sha256', $password);

 // Profile picture //

 if(isset($_POST["submit"])) {
     $target_dir = "../images/";
     $target_file = $target_dir . basename($_FILES["image"]["name"]);
     $uploadOk = 1;
     $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
     // Check if image or not

     $check = getimagesize($_FILES["image"]["tmp_name"]);
     if($check !== false) {
         // "";
         $uploadOk = 1;
     } else {
         // "Dit bestand is geen afbeelding.";
         $uploadOk = 0;
     }

     // Check if file already exists
     if (file_exists($target_file)) {
         // "<br />Dit bestand bestaat al.<br />";
         $uploadOk = 0;
     }
     // Check file size
     if ($_FILES["image"]["size"] > 200000) {
         // "Sorry, bestandsgrootte mag maximaal 200KB zijn.";
         $uploadOk = 0;
     }
     // Allow certain file formats
     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
     && $imageFileType != "gif" ) {
         // "Sorry, alleen JPG, JPEG, PNG & GIF afbeeldingen toegestaan.";
         $uploadOk = 0;
     }
     // Check if $uploadOk is set to 0 by an error
     if ($uploadOk == 0) {
         // "Uw bestand is niet ge-upload. Neem contact op met de website beheerder.";
     // if everything is ok, try to upload file
     } else {
         if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
             // "<br />De afbeelding ". basename( $_FILES["image"]["name"]). " is met succes ge-upload";
         } else {
             // "Er is iets fout gegaan met het uploaden van het bestand. Neem contact op met de website beheerder.";
         }
     }
 }

 // if there's no error, continue to signup
 if( !$error ) {

   $sql = "INSERT INTO users (name, birthday, description, photo_url, email, password)
   VALUES ('$name', '$birthdate', '$about', '$image', '$email', '$password')";
   $res = mysqli_query($conn,$sql);
    // var_dump($sql);
    // exit();
  if ($res) {
   $errTyp = "success";
   $errMSG = "Successfully registered, you may login now";
   unset($name);
   unset($email);
   unset($password );
    header('Refresh: 3; URL=../index.php');
  } else {
   $errTyp = "danger";
   $errMSG = "Something went wrong, try again later...";
  }

 }

}




?>
