<?php

include 'dbh.inc.php';

$offset = 0;
$page_result = 6;


  ////////////////////////////////////////////
  /////Fetching all results and counting/////
  //////////////////////////////////////////

  $page_number = isset($_GET['pagenr']) ? $_GET['pagenr'] : 1;
  $category_name = isset($_GET['cat']) ? $_GET['cat'] : null;

  if(isset($category_name)) {
    $select_results_all =  "SELECT * FROM blog_articles WHERE blog_category = '$category_name'";
  } else {
    $select_results_all =  "SELECT * FROM blog_articles";
  }

  $result = mysqli_query($conn,$select_results_all);
  $rows = mysqli_num_rows($result);
  $pagecount = $rows;
  $num = $pagecount / $page_result;

  if(isset($_GET['pagenr']))
  {
   $page_value = $_GET['pagenr'];
   if($page_value > 1)
   {
    $offset = ($page_value - 1) * $page_result;
   }
  }

  /////////////////////////////////////////
  ///Fetching results based on category///
  ///////////////////////////////////////

  if(isset($category_name)) {
    $query = "SELECT * FROM blog_articles WHERE blog_category = '$category_name' LIMIT $offset, $page_result";
  } else {
    $query = "SELECT * FROM blog_articles LIMIT $offset, $page_result";
  }


  $result = mysqli_query($conn,$query);

  $blogid[]=array();
  $title[]=array();
  $date[]=array();
  $body[]=array();
  $image[]=array();
  $author[]=array();
  $category[]=array();

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


////////////////////////////////////////
///////Shorten text in the cards///////
//////////////////////////////////////

function custom_echo($i, $length)
{
  if(strlen($i)<=$length)
  {
    echo $i;
  }
  else
  {
        $s = substr(strip_tags($i), 0, 120);
        $i = substr($s, 0, strrpos($s, ' ')) . " " . '...';
    echo $i;
  }
}
?>
