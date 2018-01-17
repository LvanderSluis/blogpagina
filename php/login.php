<DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Blog Code Gorilla</title>
  <link rel="stylesheet" type="text/css" href="/css/inlog.css">
</head>

<body>
	<h1><center>Inloggen</center></h1>
<!-- ********************************************************************** -->
  <?php
    if (isset ($_SESSION['u_id']))
  	 {
       echo '<form action="PHP/logout.inc.php" method="POST">
  					 <button type="submit" name="submit">Logout</button></form>';
  	 }
  	else
  	 {
  		 echo '<center><form action="php/login_user.php" method="POST">
  					 <input type="text" name="email" placeholder="E-Mail">
  					 <input type="password" name="user_password" placeholder="Password">
						 <br><br><br><br>
						 <center><button type="submit" name="submit">Inloggen</button></center></form></center>';
  		}
  ?>
<br>
<a href="php/registration_user.php"><center><input type="submit" name="signup_submit" value="aanmelden"/></center>

  <br>
  <br>
  <!-- Hier begint footer **********************************************************-->
  <footer>
</footer>
</body>
</html>
