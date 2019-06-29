<?php
  $title = 'Auditoría de clóset';
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
                
              </div><!--.col-sm-5-->
              <div class="col-sm-7">
                <h3 class="title-service"><?php echo $title ?></h3>
                <p class="subtitle-service">¿De verdad no tienes nada qué ponerte?</p>
                <p class="desc-service">Ábrenos la puerta de tu clóset para descubrir qué prendas te favorecen y cuáles debes desechar, así cómo qué tipo de prendas dominan en tu armario y cuáles te hacen falta. A su vez, te enseñaremos a armar combinaciones que te permitan sacar el mayor provecho a tus prendas y proyectarte correctamente todos los días de la semana.</p>
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
  </body>
</html>