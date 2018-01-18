<footer class="page-footer grey darken-4">
  <div class="container">
    <div class="row">

      <div class="col l3 s12">
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

</html>
