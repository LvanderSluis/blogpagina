<?php

include('countblog.php')


 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">ZEEMES</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"><small>Profiel updaten</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                  <hr />
                 </div>

                 <?php
             if ( isset($errMSG) ) {

             ?>
             <div class="form-group">
                  <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
             <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                     </div>
                  </div>
                     <?php
             }
             ?>
              <div class="form-group">
                <label>Naam</label>
                <input type="text" name="name" class="form-control" placeholder="Uw naam" value="<?php echo $_SESSION["name"]; ?>">
                  <span class="text-danger"><?php echo $nameError; ?></span>
              </div>
              <div class="form-group">
                <label>Geboortedatum</label>
                <input type="date"  name="birthdate" class="form-control" placeholder=""  min="1927-01-01" max="2017-01-01">
              </div>
              <div class="form-group">
                <label>Over mij</label>
                <textarea rows="4" name="about" cols="50" class="form-control" placeholder="Vertel in het kort iets over uzelf" value="over mijzelf"><?php echo $_SESSION["description"]; ?></textarea>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlFile1">Upload Profielfoto</label>
                  <input type="file" name="image" accept="image/*">
                </div>
                  <div class="form-group">
                    <label>Email Adres</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $_SESSION["email"]; ?>">
                      <span class="text-danger"><?php echo $emailError; ?></span>
                  </div>
                  <div class="form-group">
                    <label>Herhaal Email</label>
                    <input type="text" name="email-repeat" class="form-control" placeholder="Nogmaals Email" >
                  </div>
                  <div class="form-group">
                    <label>Paswoord</label>
                    <input type="password" name="password" class="form-control" placeholder="Paswoord" >
                    <span class="text-danger"><?php echo $passError; ?></span>
                  </div>
                  <div class="form-group">
                    <label>Herhaal Paswoord</label>
                    <input type="password" name="password-repeat" class="form-control" placeholder="Nogmaals Paswoord" >
                  </div>
                  <button type="submit" name="submit" class="btn btn-default btn-block">Registreer</button>
              </form>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright BlogTest, &copy; 2017</p>
    </footer>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
