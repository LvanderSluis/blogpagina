<?php

$server = "localhost";
$username = "root";
$password = "root";
$db = "blog";

// connectie maken
$conn = mysqli_connect($server, $username, $password, $db);

// connectie testen

if($conn->connect_error){
  die("Kan geen connectie met de databases maken". $conn->connect_error);
}

// echo "Verbonden <br /> <br />";

 ?>
