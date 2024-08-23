<!DOCTYPE html>
<html lang="en">
   <head>
     <!-- basic -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- mobile metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="initial-scale=1, maximum-scale=1">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- site metas -->
     <title>Tienda Pullo</title>
     <meta name="keywords" content="">
     <meta name="description" content="">
     <meta name="author" content="">
     <!-- bootstrap css -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- style css -->
     <link rel="stylesheet" href="css/style.css">
     <!-- Responsive-->
     <link rel="stylesheet" href="css/responsive.css">
     <!-- fevicon -->
     <link rel="icon" href="images/fevicon.png" type="image/gif" />
     <!-- Scrollbar Custom CSS -->
     <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
     <!-- Tweaks for older IEs-->
     <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
     <!-- owl stylesheets -->
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
     <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
  <div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="#"><img src="images/logo.png"></a></div>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>



                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="index.php">Home</a>
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Dropdown Menu -->
                                        <li class="nav-item dropdown">
                                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Prendas
                                           </a>
                                           <ul class="dropdown-menu dropdown-color" aria-labelledby="navbarDropdown">
                                              <li><a class="dropdown-item" href="buzoListar.php">Buzos</a></li>
                                              <li><a class="dropdown-item" href="remeraListar.php">Remeras</a></li>
                                           </ul>
                                        </li>

                                        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu dropdown-color">
            <li><a class="dropdown-item" href="listarNike.php">Nike</a></li>
            <li><a class="dropdown-item" href="listarAdidas.php">Adidas</a></li>
            <li><a class="dropdown-item" href="listarSupreme.php">Supreme</a></li>
            <li><a class="dropdown-item" href="listarPuma.php">Puma</a></li>
            <li><a class="dropdown-item" href="listarReebok.php">Reebok</a></li>
            <li><a class="dropdown-item" href="listarFila.php">Fila</a></li>
          </ul>
        </li>
                           <!--<a class="nav-item nav-link" href="collection.html">Collection</a>-->
                           <!--<a class="nav-item nav-link" href="shoes.html">Shoes</a>-->
                           <a class="nav-item nav-link" href="allProductos.php">Productos</a>
                           <a class="nav-item nav-link"></a>
                           <a class="nav-item nav-link last"></a>
                           <a class="nav-item nav-link last"></a>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">

</section>
			</div>
		</div>
	</div>
	<!-- new collection section start -->
  <div class="collection_text">New Collection</div>
   <div class="about_main layout_padding">
    <div class="collection_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Chaqueta vaquera estilo camionero con efecto craquelado</strong></h1>
    	    <p class="consectetur_text">Denim totalmente de algodón con tratamiento craquelado aplicado a mano. Cierre frontal con botones, bolsillos de ribete para las manos en la parte inferior delantera y bolsillos de parche con solapa y botones en el pecho. Ajustes con lengüetas en puños y dobladillo trasero con parche de cuero con el logotipo.</p>

          <?php
      // 1) Conexion
      $conexion = mysqli_connect("127.0.0.1", "root", "");
      mysqli_select_db($conexion, "tienda");

      // 2) Preparar la orden SQL
      // Sintaxis SQL SELECT
      // SELECT * FROM nombre_tabla
      // => Selecciona todos los campos de la siguiente tabla
      // SELECT campos_tabla FROM nombre_tabla
      // => Selecciona los siguientes campos de la siguiente tabla
      $consulta='SELECT * FROM ropa WHERE marca = "supreme" AND prenda = "campera"';

      // 3) Ejecutar la orden y obtenemos los registros
      $datos= mysqli_query($conexion, $consulta);


      // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
            while ($reg = mysqli_fetch_array($datos)) {?>
          <div class="col-sm-4">
            <div class="best_shoes">
              <p class="best_text"> <?php echo ucwords($reg['marca']) ?></p>
              <div class="shoes_icon"><img src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>"></div>
              <div class="star_text">

                <div class="left_part">
                  <h1>Precio</h1>
                </div>
                <div class="right_part">

                  <div class="shoes_price"> <span style="color: #ff4e5b;">$<?php echo $reg['precio']; ?></span></div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-sm-4">
          <div class="best_shoes">
            <p class="best_text"><?php echo ucwords($reg['marca']) ?></p>
            <div class="shoes_icon"><img src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen2'])?>"></div>
            <div class="star_text">
              <div class="left_part">
                <h1>Precio</h1>

              </div>
              <div class="right_part">
                <div class="shoes_price"><span style="color: #ff4e5b;">$<?php echo $reg['precio']; ?></span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="collectipn_section_3 layout_padding">
          <div class="container">

              <a  href= <?php echo $reg['pago']; ?> class="btn btn-primary">Comprar</a>

          </div>
        </div>
        <?php } ?>

    	</div>
    </div>

    </div>
	<!-- new collection section end -->
  <!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<div class="row">
    				<div class="col-sm-6 col-lg-2">
    					<div><a href="#"><img src="images/footer-logo.png"></a></div>
    				</div>
    				<div class="col-sm-6 col-lg-2">
    					<div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(+54) 91134897712</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="footer-logo"><img src="images/email-icon.png"><span class="map_text">PuloIndumentariaDeportiva@gmail.com</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="social_icon">
    						<ul>
    							<li><a href="#"><img src="images/fb-icon.png"></a></li>
    							<li><a href="#"><img src="images/twitter-icon.png"></a></li>
    							<li><a href="#"><img src="images/in-icon.png"></a></li>
    							<li><a href="#"><img src="images/google-icon.png"></a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-2"></div>
    			</div>
    	    </div>
    	    <div class="footer_section_2">

    			<div class="col-sm-6 col-lg-2">
    				<h2 class="adderess_text">Newsletter</h2>
    				<div class="form-group">
                        <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                    </div>
                    <button class="subscribr_bt">Subscribite</button>
    			</div>
    			</div>
    	        </div>
	        </div>
    	</div>
    </div>
	<!-- section footer end -->
	<div class="copyright">2024 All Rights Reserved. Micaela Soledad Calviño</div>
	

  <!-- JavaScript del bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript -->
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });


$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script>
   </body>
</html>
