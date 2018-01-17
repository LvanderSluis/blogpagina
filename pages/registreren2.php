<?php
include_once('../includes/header.php');

?>



 <div class="container">
    <div class="row">
      <div class="col l9 s12" id="blogimg">
        <h3>Registreren</h3>
        <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Naam</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Achternaam</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
        <input type="text" class="datepicker">
        <label for="last_name">Geboortedatum</label>
      </div>
    </div>
    <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea1">Over mij</label>
          </div>
        </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Paswoord</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Registreer
    <i class="material-icons right">send</i>
  </button>

    </form>


      </div>

      <?php
      include_once('../includes/sidebar.php');
      ?>

    </div>
  </div>


 <?php
  include_once('../includes/footer.php');
  ?>
