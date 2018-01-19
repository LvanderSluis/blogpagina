<?php

include 'dbh.inc.php';

$offset = 0;
$page_result = 6;


if(isset($_GET['cat']))

{
  ////////////////////////////////////////////
  /////Fetching all results and counting/////
  //////////////////////////////////////////
  $r = $_GET["cat"];
  $select_results_all =  "SELECT * FROM blog_articles WHERE blog_category = '$r'";
  $result = mysqli_query($conn,$select_results_all);
  $rows = mysqli_num_rows($result);
  $pagecount = $rows;
  $num = $pagecount / $page_result;

  if(isset($_GET['catnr']))
  {
   $page_value = $_GET['catnr'];
   if($page_value > 1)
   {
    $offset = ($page_value - 1) * $page_result;
   }
  }


  /////////////////////////////////////////
  ///Fetching results based on category///
  ///////////////////////////////////////



  $query = "SELECT * FROM blog_articles WHERE blog_category = '$r' LIMIT $offset, $page_result";
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

}
else

{

  ////////////////////////////////////////////
  /////Fetching all results and counting/////
  //////////////////////////////////////////

  $select_results_all =  "SELECT * FROM blog_articles";
  $result = mysqli_query($conn,$select_results_all);
  $rows = mysqli_num_rows($result);
  $pagecount = $rows;
  $num = $pagecount / $page_result;

  if($_GET['pagenr'])
  {
   $page_value = $_GET['pagenr'];
   if($page_value > 1)
   {
    $offset = ($page_value - 1) * $page_result;
   }
  }

////////////////////////////////////////////////////////////////////////////////////////
///Set a limit on all fetched results and create array to import data into the cards///
//////////////////////////////////////////////////////////////////////////////////////

$select_results =  "SELECT * FROM blog_articles ORDER BY blogid DESC LIMIT $offset, $page_result";
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
