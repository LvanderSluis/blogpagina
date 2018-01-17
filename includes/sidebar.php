<div id="wrapper-side">
<div class="col l3 s12" id="sidebars">
	<h6>Zoek</h6>
	<div class="input-field">
		<form action="results.php">
			<input type="text" name="q" id="tipue_search_input">
		</form>
        </div>
        <h6>Recente Blogs</h6>

		 <?php
		 for($i = 1; $i<=3; $i++){
		 ?>

			  <a href="../pages/blog.php?blogid=<?php echo $blogid[$i]; ?>"><div class="tags box foo">
      		  <?php echo $title[$i]; ?>
			  </div></a>


			<?php
		  }
		  ?>

  
  <!-- <h6>Categorieën</h6> -->

	<?php

	$query = "SELECT DISTINCT blog_category FROM blog_articles";
	$result = mysqli_query($conn, $query);


	while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
	$row['blog_category'];


	?>

		 <!-- <div class="tags box foo">
		 	<p><?php echo $row['blog_category']; ?></p>
		 </div> -->



	 <?php
	 }
	 ?>

   </div>
</div>
