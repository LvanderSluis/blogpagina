<?php
include_once('../includes/header.php');

include '../includes/speedblog.php';



?>
<div class="header-text-img">
  <div id="header-overlay" ></div>
  <img class="responsive-img z-depth-1" id="header-img" src="../<?php echo $row["afbeelding"]; ?>" onerror="this.src='../img/1.jpg'">
  <div class="centered">Categorieën</div>
</div>
<div class="container" >
   <div class="row">
     <div class="col l10 s12" id="wrapper-blog">

      <?php

    
      
      $query = "SELECT DISTINCT blog_category FROM blog_articles WHERE blog_category <> '' ";
      $result = mysqli_query($conn, $query);


      while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results

      $row['blog_category'];

      ?>

      <a href="bloggies.php?cat=<?php echo $row['blog_category']; ?> "><div class="cats box foo"><?php echo $row['blog_category']; ?></div></a>
      
      <?php
 			}
      ?>


</div>
      

       <?php
       include_once('../includes/sidebar.php');
       ?>

   </div>
</div>



  <?php
   include_once('../includes/footer.php');
   ?>
