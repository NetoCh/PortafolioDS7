<?php
//verifica si la variable get esta asignada y asigna el contenido del lenguaje correcto
 if (isset($_GET['lang']) && ($_GET['lang']=='en'))
   include("include/text_en.php");
 else
    include("include/text_es.php");

//inicia el html con PHP
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo "$titulo[0]";?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="images/pa.png" alt="logo" style="width:50px;"> <?php echo "$titulo[0]"; ?>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo "$menu[0]"; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo "$menu[1]"; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo "$menu[2]"; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo "$menu[3]"; ?></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo "$menu[4]"; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="index.php?lang=es"><?php echo "$menu[5]"; ?></a>
                <a class="dropdown-item" href="index.php?lang=en"><?php echo "$menu[6]"; ?></a>                
              </div>
            </li>            
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>2019</h3>
              <p><?php echo "$titulo[1]"; ?></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>2019</h3>
              <p><?php echo "$titulo[1]"; ?></p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>2019</h3>
              <p><?php echo "$titulo[1]"; ?></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4"><?php echo "$titulo[2]"; ?> </h1>
      
      <p><?php echo "$contenido[0]"; ?></p>

      <p><?php echo "$contenido[1]"; ?></p>

      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo "$titulo[3]"; ?></a>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
              <?php echo "$contenido[2]"; ?>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><?php echo "$titulo[4]"; ?>
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
              <?php echo "$contenido[3]"; ?>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><?php echo "$titulo[5]"; ?></a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
              <?php echo "$contenido[4]"; ?>
            </div>
          </div>
        </div>
      </div>

      <hr>

      <!-- Call to Action Section -->


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; <?php echo "$footer[0]"; ?> <br> <a href="http://disclaimer.innovacion.gob.pa/" target="_blank"> <?php echo "$footer[1]"; ?> </a> </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
