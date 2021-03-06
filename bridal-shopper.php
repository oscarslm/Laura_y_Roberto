<?php
  $title = 'Bridal shopper';
?>
<!doctype html>
<html lang="en-MX">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" type="text/css" href="./css/swiper.min.css">
    <!-- Imagehover CSS -->
    <link rel="stylesheet" type="text/css" href="./css/imagehover.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="./css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./css/custom.css">

    <title><?php echo $title ?> | Laura y Roberto</title>
  </head>
  <body class="animated fadeIn">
    
    <div id="wrapper">

      <?php include './header-2.php'; ?>
      
      <section id="content" class="center-vertically">

        <div class="content-wrap">
          
          <div class="container clearfix">

            <div class="row">
              <div class="col-lg-5" align="center">
                <video controls>
                  <source src="./video/bridal-shopper.mp4" type="video/mp4">
                  Your browser does not support HTML5 video.
                </video>
              </div><!--.col-lg-5-->
              <div class="col-lg-7">
                <h3 class="title-service mt-4"><?php echo $title ?></h3>
                <p class="subtitle-service">No hay novia fea... pero hermosas pocas</p>
                <p class="desc-service">En este día tan especial sabemos que quieres verte espectacular, por lo que te ayudaremos a elegir el vestido, peinado, maquilla- je y accesorios que saquen la mejor versión de ti. Si así lo deseas, en este servicio puedes incluir a tus amigos y familiares más cercanos.</p>
              </div><!--.col-lg-7-->
            </div><!--.row-->
            
          </div><!--.container-->

        </div><!--.content-wrap-->
        
      </section><!--#content-->

      <?php include './footer.php'; ?>

    </div><!--#wrapper-->

    <!-- jQuery, Popper.js and Bootstrap JS -->
    <script type="text/javascript" src="./js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./js/functions.js"></script>
    <script type="text/javascript">
      $("#header").removeClass("fixed-top");
    </script>
  </body>
</html>