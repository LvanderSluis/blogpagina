<!DOCTYPE html>
<html>

<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.css" media="screen,projection" />
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	<link href="../ckeditor/plugins/codesnippet/lib/highlight/styles/atom-one-dark.css" rel="stylesheet">
	<script src="../ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>

	<script src="../tipuesearch/tipuesearch_content.js"></script>
  <script src="../tipuesearch/tipuesearch_set.js"></script>
  <script src="../tipuesearch/tipuesearch.min.js"></script>
</head>

<body>

  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper grey darken-4"> <a href="../index.php" class="brand-logo">: ) }- > C > - ^^^o~~~</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul id="dropdown1" class="dropdown-content">
				  <li><a href="../pages/posts.php">profiel</a></li>
				  <li><a href="#!">naar blog pagina</a></li>
				  <li class="divider"></li>
				  <li><a href="#!">update profile</a></li>
				</ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="../pages/bloggies.php">Blogs</a>
          </li>
          <li><a href="category.php">Categorieën</a>
          </li>

          <li><a class="modal-trigger" href="#modal1">Inloggen</a>
          </li>
           <li><a href="posts.php"><i class="material-icons right">account_circle</i></a></li>
        </ul>
        <ul class="side-nav " id="mobile-demo">
          <li><a href="..pages/blog.php">Sass</a>
          </li>
          <li><a href="category.php">Categorieën</a>
          </li>
          <li><a href="collapsible.html">Javascript</a>
          </li>
          <li><a href="mobile.html">Mobile</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
	<div id="modal1" class="modal">
		<div class="modal-content">
			<div class="row">
		 <!--<form class="col s12"> -->
		 <?php
					if (isset ($_SESSION['u_id']))
					 {
						 echo '<form action="../includes/logout.inc.php" method="POST">
									 <button type="submit" name="submit">Logout</button></form>';
					 }
					else
					 {
						 echo '<form action="../includes/login.inc.php" method="POST">
									 <input type="email" name="email" placeholder="E-Mail">
									 <input type="password" name="user_password" placeholder="Password">
									 <button class="btn waves-effect waves-light" type="submit" name="submit">Inloggen
								 <i class="material-icons right">send</i></button></form>';
						}
				?>
				 </div>
			 </div>
			 <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> -->



		<div class="modal-footer">
			nogGeenAccount?
			<a href="registreren.php" class="modal-action modal-close waves-effect waves-green btn-flat">Registreren</a>
		</div>
	</div>
