<?php
include_once('../includes/header.php');

include '../includes/speedblog.php';


?>
<div class="header-text-img">
  <div id="header-overlay" ></div>
  <img class="responsive-img " id="header-img" src="../<?php echo $row["afbeelding"]; ?>" onerror="this.src='../img/1.jpg'">
  <div class="centered">Blogs</div>
</div>
<div class="container" id="wrapper-blog">
   <div class="row">
     <div class="col l12 s12" id="blogimg">



      <?php
 			for($i = 1; $i<count($category); $i++){
 			?>



         <div class="col l6 m12 s12">
           <div class="card ">
             <div class="card-image">
               <img src="../<?php echo $image[$i]; ?>"  onerror="this.src='../img/1.jpg'" width="100%" height="100%">



             </div>
             <div class="card-content">
             <span class="card-title"><?php echo $title[$i]; ?></span>
               <p>by  <?  echo $author[$i]; ?></p>
               <p><?  custom_echo($body[$i], ""); ?></p>

             </div>
             <div class="card-action white ">
               <a href="blog.php?blogid=<?php echo $blogid[$i]; ?>">Lees verder &#8250; </a>
               <sub><?php echo $category[$i]; ?></sub>

             </div>
           </div>

         </div>



 			<?php
 			}
       ?>
        <div class="col l12 m12 s12">
       <ul class="pagination" id="pagination">


      <?php
            $page_number = isset($_GET['pagenr']) ? $_GET['pagenr'] : 1;
            $category_name = isset($_GET['cat']) ? $_GET['cat'] : "";
            //echo $page_number;

            if($page_number > 1)
            {
            echo "<li><a href = 'bloggies.php?pagenr=".($page_number - 1)."&cat=$category_name'> &#171; </a></li>";
            }
            for($l = 1 ; $l <= ceil($num); $l++)
            {
             echo "<li><a href = 'bloggies.php?pagenr=$l&cat=$category_name'>". $l ."</a></li>";
            }
            if($page_number = 1)
            {
            echo "<li><a href = 'bloggies.php?pagenr=".($page_number + 1)."&cat=$category_name'> &#187; </a></li>";
          }
            ?>

         </ul>
        </div>
      </div>
   </div>
</div>


  <script>

        window.sr = ScrollReveal();
        sr.reveal('.card', {
          duration: 1000,
          origin:'top',
          // distance:'100px',
          viewFactor: 0.2,
          scale: 0.7,
        });

    </script>


  <?php
   include_once('../includes/footer.php');
   ?>
