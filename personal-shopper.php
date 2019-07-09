<?php
  $title = 'Personal shopper';
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

      <?php include './header.php'; ?>
      
      <section id="content">

        <div class="content-wrap">
          
          <div class="container clearfix">

            <div class="row">
              <div class="col-sm-5">
                <video controls>
                  <source src="./video/personal-shopper.mp4" type="video/mp4">
                  Your browser does not support HTML5 video.
                </video>
              </div><!--.col-sm-5-->
              <div class="col-sm-7">
                <h3 class="title-service"><?php echo $title ?></h3>
                <p class="subtitle-service">Bueno, bonito y barato ¡Vámonos de compras!</p>
                <p class="desc-service">Te acompañamos a renovar tu guardarropa o bien, a elegir lo que necesitas para esa ocasión especial (entrevista de trabajo, boda, graduación, etc.). Juntos elegiremos las prendas que más te favorezcan. Impacta como nunca lo habías hecho.</p>
              </div><!--.col-sm-7-->
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