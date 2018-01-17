<?php
include_once('../includes/header.php');

include '../includes/speedblog.php';



?>
<div class="container z-depth-2" id="wrapper-blog">
   <div class="row">
     <div class="col l9 s12" id="blogimg">
      <h5>Categorieën</h5>



      <?php
 			for($i = 1; $i<count($category); $i++){
 			?>



         <div class="col l6 m12 s12">
           <div class="card">
             <div class="card-image">
               <img src="../<?php echo $image[$i]; ?>"  onerror="this.src='../img/1.jpg'" width="100%" height="100%">
               <span class="card-title"><?php echo $category[$i]; ?></span>
             </div>
             <div class="card-content">
               <p><?  custom_echo($body[$i], ""); ?></p>
             </div>
             <div class="card-action teal lighten-2">
               <a href="blog.php?blogid=<?php echo $blogid[$i]; ?>">Lees verder</a>
             </div>
           </div>
         </div>



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
