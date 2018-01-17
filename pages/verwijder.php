<?php

include '../includes/countblog.php';
include '../includes/dbh.inc.php';


$r = $_GET['blogid'];

$sql = "DELETE FROM blog_articles WHERE blogid = $r";

if ($conn->query($sql)=== TRUE){
  echo "Hij is weg!";
} else{
  echo "Hij is er nog hoor...."  .  $conn->error;
}

$conn->close();

?>
