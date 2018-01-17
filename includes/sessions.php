<?php
ob_start();
session_start();
require_once 'dbh.inc.php';

// if session is not set this will redirect to login page
if(isset($_SESSION['name'])) {
  // echo "gebruiker is ingelogd";
} else {
  header("Location: ../index.php");
  exit();
}

 ?>
