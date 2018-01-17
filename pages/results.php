<?php
include_once('../includes/header.php');

include '../includes/speedblog.php';


?>
<div class="container">
   <div class="row">
     <div class="col l12 s12">
        <form action="results.php">
        <div class="tipue_search_left"><img src="../tipuesearch/search.png" class="tipue_search_icon"></div>
        <div class="tipue_search_right"><input type="text" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required></div>
        <div style="clear: both;"></div>
        </form>
        <div id="tipue_search_content"></div>
      </div>
      </div>
      </div>

<?php
include_once('../includes/footer.php');
?>
