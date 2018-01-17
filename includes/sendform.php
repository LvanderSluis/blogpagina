<?php


include 'countblog.php';

$r = $_SESSION['blogid'];

$title = mysqli_real_escape_string($conn, $_POST['title']);
$body = mysqli_real_escape_string($conn, $_POST['editor1']);

$sql = "UPDATE blog_articles SET title='$title', body='$body' WHERE blogid='$r' ";

if(!mysqli_query($conn, $sql))
{
  // echo 'Formulier niet doorgevoerd';
}
else {
  // echo 'Formulier verzonden <br />';
}

header("Location: ../pages/blog.php?blogid=$r");

?>
