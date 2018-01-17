<?php
include_once('../includes/header.php');

include '../includes/speedblog.php';



?>
<div class="container z-depth-2" id="wrapper-blog">
   <div class="row">
     <div class="col l9 s12" id="blogimg">
      <h5>Categorieën</h5>

      <a href=""><div class="cats box foo">PHP</div></a>
      <a href=""><div class="cats box foo">Javascript</div></a>
      <a href=""><div class="cats box foo">Html</div></a>
      <a href=""><div class="cats box foo">Css</div></a>
      <a href=""><div class="cats box foo">Jquery</div></a>
      <a href=""><div class="cats box foo">MySQL</div></a>
      <a href=""><div class="cats box foo">Python</div></a>
      <a href=""><div class="cats box foo">Ruby</div></a>




      
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
