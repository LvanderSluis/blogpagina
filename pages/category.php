<?php
include_once('../includes/header.php');

include '../includes/speedblog.php';



?>
<div class="container z-depth-2" id="wrapper-blog">
   <div class="row">
     <div class="col l9 s12" id="blogimg">
      <h5>Categorieën</h5>

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
<div class="container">
   <div class="row">
     <div class="col l4  s12">
        <ul class="pagination">


          <?php


          if($_GET['pagenr'] > 1)
          {
          echo "<li><a href = 'category.php?pagenr=".($_GET['pagenr'] - 1)." '> &#171; </a></li>";
          }
          for($l = 1 ; $l <= ceil($num); $l++)
          {
           echo "<li><a href = 'category.php?pagenr=$l '>". $l ."</a></li>";
          }
          if($_GET['pagenr'] = 1)
          {
          echo "<li><a href = 'category.php?pagenr=".($_GET['pagenr'] + 1)." '> &#187; </a></li>";
          }



           ?>



         </ul>
       </div>
    </div>
  </div>


  <?php
   include_once('../includes/footer.php');
   ?>
