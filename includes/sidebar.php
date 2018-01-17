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

 $select_results_all =  "SELECT * FROM blog_articles ORDER BY blogid DESC LIMIT 3";
 $result = mysqli_query($conn,$select_results_all);

 while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results

	 	$row['blogid'];
		$row['title'];

		 ?>

			  <a href="../pages/blog.php?blogid=<?php echo $row['blogid']; ?>"><div class="tags box foo">
      		  <?php echo $row['title']; ?>
			  </div></a>


			<?php
		  }
		  ?>


  <h6>Categorieën</h6>

	<?php

	$query = "SELECT DISTINCT blog_category FROM blog_articles WHERE blog_category <> '' ";
	$result = mysqli_query($conn, $query);


	while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results

	$row['blog_category'];

	?>
<a href="bloggies.php?cat=<?php echo $row['blog_category']; ?>">
		 <div class="tags box foo">
		 	<?php echo $row['blog_category']; ?>
		 </div>
</a>


	 <?php
	 }
	 ?>

   </div>
</div>
