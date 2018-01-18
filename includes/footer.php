<footer class="page-footer grey darken-4">
  <div class="container">
    <div class="row">

      <div class="col l3 s12">
        <h5 class="white-text">Recente Blogs</h5>
        <?php

              $select_results_all =  "SELECT * FROM blog_articles ORDER BY blogid DESC LIMIT 5";
              $result = mysqli_query($conn,$select_results_all);

              while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results

              $row['blogid'];
              $row['title'];

              ?>

                <a href="../pages/blog.php?blogid=<?php echo $row['blogid']; ?>"><div class="ftr box foo">
                    <?php echo $row['title']; ?>
                </div></a>


              <?php
              }
              ?>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Categorieën</h5>
        <?php

            $query = "SELECT DISTINCT blog_category FROM blog_articles WHERE blog_category <> '' ";
            $result = mysqli_query($conn, $query);


            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results

            $row['blog_category'];

            ?>
          <a href="bloggies.php?cat=<?php echo $row['blog_category']; ?>">
              <div class="ftr box foo">
                <?php echo $row['blog_category']; ?>
              </div>
          </a>


        <?php
        }
        ?>
      </div>
      <div class="col l3 s12">
         <h6>Tags</h6>

           
      </div>
      <div class="col l3  s12 ftr-links">
        <h5 class="white-text">Menu</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">HOME</a>
          </li>
          <li><a class="grey-text text-lighten-3" href="#!">BLOGS</a>
          </li>
          <li><a class="grey-text text-lighten-3" href="#!">Categorieën</a>
          </li>
          <li><a class="grey-text text-lighten-3" href="#!">LOGIN</a>
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

</html>
