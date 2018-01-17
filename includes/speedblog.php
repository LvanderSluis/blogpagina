<?php

include 'dbh.inc.php';

$offset = 0;
$page_result = 6;

if($_GET['pagenr'])
{
 $page_value = $_GET['pagenr'];
 if($page_value > 1)
 {
  $offset = ($page_value - 1) * $page_result;
 }
}

$select_results_all =  "SELECT * FROM blog_articles";
$result = mysqli_query($conn,$select_results_all);
$rows = mysqli_num_rows($result);
$pagecount = $rows;
$num = $pagecount / $page_result;


if(isset($_GET['cat']))

{
  $r = $_GET["cat"];
  $query = "SELECT * FROM blog_articles WHERE blog_category = '$r' ";
  $result = mysqli_query($conn,$query);
//  var_dump($result);
//  exit();
$blogid[]=array();
$title[]=array();
$date[]=array();
$body[]=array();
$image[]=array();
$author[]=array();
$category[] = array();
 while($row = mysqli_fetch_array($result))
 {
  $blogid[] = $row[0];
 $title[] = $row[2];
 $body[] = $row[3];
 $author[]= $row[4];
 $date[] = $row[6];
 $image[] = $row[7];
 $category[] = $row[8];
 }

  // var_dump($conn);
  // exit();
}
else

{
$select_results =  "SELECT * FROM blog_articles ORDER BY blogid DESC limit $offset, $page_result";
$result = mysqli_query($conn,$select_results);


$blogid[]=array();
$title[]=array();
$date[]=array();
$body[]=array();
$image[]=array();
$author[]=array();
$category[] = array();





while($row = mysqli_fetch_array($result))
{

 $blogid[] = $row[0];
 $title[] = $row[2];
 $body[] = $row[3];
 $author[]= $row[4];
 $date[] = $row[6];
 $image[] = $row[7];
 $category[] = $row[8];

}

}

//  $select_cat =  "SELECT DISTINCT blog_category FROM blog_articles";
//  $result = mysqli_query($conn,$select_cat);
// //  var_dump($result);
// //  exit();
//  $category[]=array();
//  while($row = mysqli_fetch_array($result))
//  {
//   $category[]=$row[8];
//  }





//Blogkaartjes
function custom_echo($i, $length)
{
  if(strlen($i)<=$length)
  {
    echo $i;
  }
  else
  {
        $s = substr(strip_tags($i), 0, 100);
        $i = substr($s, 0, strrpos($s, ' ')) . " " . '...';
    echo $i;
  }
}
?>
