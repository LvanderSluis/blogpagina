<?php

include '../includes/speedblog.php';
include_once('../includes/header.php');

if(!isset($_GET['blogid'])){
  die("moi id niet gezet");
}
$x = $_GET['blogid'];

$query = "SELECT * FROM blog_articles WHERE blogid='$x'";
$rows = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($rows))
{

?>

<div class="header-text-img">
  <div id="header-overlay" ></div>
  <img class="responsive-img z-depth-1" id="header-img" src="../<?php echo $row["afbeelding"]; ?>" onerror="this.src='../img/1.jpg'">
  <div class="centered"><?php echo $row["title"]; ?></div>
</div>

 <div class="container">
    <div class="row">
      <div class="col l10 s12" >
      
      <div class="blog-content" id="wrapper-blogs">
      <img class="responsive-img" id="blog-img" src="../<?php echo $row["afbeelding"]; ?>" onerror="this.src='../img/1.jpg'">
      


        <?php $originaldate = $row["date"];
              $newdate = date("d M Y", strtotime($originaldate)); 
        ?>

        <h6><?php echo $newdate; ?>, <?php echo $row["author"]; ?></h6>
        <h3><?php echo $row["title"]; ?></h3>
        
        
        <p>Categorie: <?php echo $row["blog_category"]; ?></p><br>
        <p><?php echo $row["body"]; ?></p>

     <div class="back-forth">
       
        <a href="blog.php?blogid=<?php $linkb = $row["blogid"] - 1;

          echo $linkb; ?>">

          <button class="links box foo white">Vorige blog</button></a>
        

        <a href="blog.php?blogid=<?php 
          $linkf = $row["blogid"] + 1;
          echo $linkf; ?>"><button class="links box foo white"> Volgende blog</button></a>
          </div>
      </div>
      
 </div>
      
      
      <?php
      include_once('../includes/sidebar.php');
      ?>
     
 </div>
</div>
<? } ?>


<?php
include_once('../includes/footer.php');
?>