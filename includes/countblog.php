<?php

include '../includes/sessions.php';

$tets = $_SESSION['userid'];


$query = "SELECT * FROM blog_articles  WHERE userid=$tets ORDER BY blogid DESC";
$result = mysqli_query($conn,$query);

$blogid[]=array();
$title[]=array();
$date[]=array();
$body[]=array();
$image[]=array();
$author[]=array();
$category[]=array();

// $rows = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result))
{
 $blogid[] = $row[0];
 $title[] = $row[2];
 $body[] = $row[3];
 $author[]= $row[4];
 $date[] = $row[6];
 $image[] = $row[7];
 $category[]=$row[8];
 // var_dump($body);
 // exit();
}

//Blogkaartjes
function custom_echo($i, $length)
{
  if(strlen($i)<=$length)
  {
    echo $i;
  }
  else
  {
        $s = substr(strip_tags($i), 0, 200);
        $i = substr($s, 0, strrpos($s, ' ')) . " " . '...';
    echo $i;
  }
}

?>
