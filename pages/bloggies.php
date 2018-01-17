<?php
include_once('../includes/header.php');

include '../includes/speedblog.php';
// $r = $_SESSION['ryanid'];


?>
<div class="container" id="wrapper-blog">
   <div class="row">
     <div class="col l9 s12" id="blogimg">
      <h5>Blogpagina</h5>



      <?php
 			for($i = 1; $i<count($blogid); $i++){
 			?>



         <div class="col l6 m12 s12">
           <div class="card ">
             <div class="card-image">
               <img src="../<?php echo $image[$i]; ?>"  onerror="this.src='../img/1.jpg'" width="100%" height="100%">
               <span class="card-title"><?php echo $title[$i]; ?></span>
             </div>
             <div class="card-content">
               <p><?  custom_echo($body[$i], ""); ?></p>
             </div>
             <div class="card-action light-blue darken-1 ">
               <a href="blog.php?blogid=<?php echo $blogid[$i]; ?>">Lees verder</a>
             </div>
           </div>
           
         </div>



 			<?php
 			}
       ?>
        <div class="col l12 m12 s12">
       <ul class="pagination" id="pagination">


          <?php


          if($_GET['pagenr'] > 1)
          {
          echo "<li><a href = 'bloggies.php?pagenr=".($_GET['pagenr'] - 1)." '> &#171; </a></li>";
          }
          for($l = 1 ; $l <= ceil($num); $l++)
          {
           echo "<li><a href = 'bloggies.php?pagenr=$l '>". $l ."</a></li>";
          }
          if($_GET['pagenr'] = 1)
          {
          echo "<li><a href = 'bloggies.php?pagenr=".($_GET['pagenr'] + 1)." '> &#187; </a></li>";
          }



           ?>



         </ul>
        </div>
</div>
       <?php
       include_once('../includes/sidebar.php');
       ?>



   </div>
</div>
  
  
  <script>
    
        window.sr = ScrollReveal();
        sr.reveal('.card', {
          duration: 500,
          origin:'left',
          distance:'30px',
          viewFactor: 0.2,
        });
    
    </script>


  <?php
   include_once('../includes/footer.php');
   ?>
