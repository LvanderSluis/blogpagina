<?php

include '../includes/countblog.php';





// var_dump($_SESSION['blogid']);
// exit();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Posts</title>
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
          <ul class="nav navbar-nav">

            <li class="active"><a href="posts.php">Mijn Blogs</a></li>
            <li><a href="users.php">Gebruikers</a></li>
            <li><a href="bloggies.php">Blog Pagina</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welkom, <?php echo $_SESSION["name"]; ?></a></li>
            <li><a href="../includes/logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <small>Beheer uw blogs</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
            <a href="write.php"><button class="btn btn-primary" type="button" id="dropdownMenu1">Schrijf een blog!</button></a>
            </div>
          </div>
        </div>
      </div>
    </header>


    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>

              <a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Posts 
              
              <?php
              for($i=1; $i == count($blogid); $i++){
               ?>
             <span class="badge"><?php echo $i; ?></span></a>
              <?php
                }
              ?>
            </div>


              <div class="well">
                <h4>Profiel</h4>
                <div>
                    <div>
                      <h5><?php echo $_SESSION["name"]; ?></h5>
                      <p><?php echo $_SESSION["email"]; ?></p>
                      <p><?php echo $_SESSION["birthday"]; ?></p>
                      <p><?php echo $_SESSION["description"]; ?></p>
                    </div>
                </div>
              </div>


          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Posts</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Posts...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Title</th>
                        <th>Published</th>
                        <th>Created</th>
                        <th></th>
                      </tr>

                      <?php
                      for($i=1; $i < count($blogid); $i++){
                      ?>

                      <tr>
                        <td><?php echo $title[$i]; ?></td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td><?php echo $date[$i]; ?></td>
                          <td>
                            <a class="btn btn-default" href="edit.php?ID=<?php echo $i; ?>&blogid=<?php echo $blogid[$i]; ?>">Bewerken</a>
                            <a class="btn btn-default" href="blog.php?blogid=<?php echo $blogid[$i]; ?>">Bekijk blog</a>
                            <a class="btn btn-danger" href="verwijder.php?ID=<?php echo $i; ?>&blogid=<?php echo $blogid[$i]; ?>">Verwijder</a>
                          </td>
                      </tr>

                      <?php

                			}
                			?>


                    </table>
              </div>
              </div>

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
