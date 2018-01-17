<?php
include_once('../includes/header.php');

?>
<div class="container">
   <div class="row">
     <div class="col l9 s12" id="blogimg">
      <h5>Auteurs</h5>

      <?php
 			for($i = 0; $i<=5; $i++){
 			?>



      <div class="col l12 s12 profile" id="profile">

          <div class="col l3 profile-img">
            <img src="../img/1.jpg" width="150" height="150">
          </div>
            <div class="col l9 profile-text">
               <h5>Naam</h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <ul>
                  <li><i class="material-icons">adb</i></li>
                  <li><i class="material-icons">adb</i></li>
                  <li><i class="material-icons">adb</i></li>
                </ul>
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

  <?php
   include_once('../includes/footer.php');
   ?>
