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



 <footer class="page-footer grey darken-4">
  <div class="container">
    <div class="row">

      <div class="col l3 s12 border-r">
        <h5 class="white-text">Footer Content1</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here
          to organize your footer content.</p>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Meest recent</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here
          to organize your footer content.</p>
      </div>
      <div class="col l3 s12">
         <h6>Tags</h6>

            
      </div>
      <div class="col l3  s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Link 1</a>
          </li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 2</a>
          </li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 3</a>
          </li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a>
          </li>
        </ul>
      </div>

  </div>
  </div>
  <div class="footer-copyright grey darken-4">
    <div class="container">© <? echo date("Y");?> Copyright Text <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>

<script type="text/javascript">
  $( document ).ready(function()
  {
    $(".button-collapse").sideNav();
    $('select').material_select();
    $('.modal').modal();
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $('.parallax').parallax();
    $('.scrollspy').scrollSpy({scrollOffset: 50});
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
  });
</script>


<!--Import jQuery before materialize.js-->

</body>
<? } ?>
</html>
