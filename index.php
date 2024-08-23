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
                           <a href="ingresarLogin.html" ><button  style="background-color:black" class="btn btn-primary"  type="button" name="button">Vendedores</button></a>
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
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">Buzo de Moda Unisex </h1>
							<h1 class="mens_text"><strong>Nike Sportswear Club Fleece</strong></h1>
							<p class="lorem_text">Las sudaderas Club Fleece le gustan a todo el mundo por su calidez y resistencia.</p>
							<button class="buy_bt" onclick="window.location.href='https://mpago.la/12bm4iq';">Comprar</button>
							<button class="more_bt" onclick="window.location.href='producto.php?id=23';">Ver Más</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="images/nike-pareja-rosa.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">

					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">Buzo de Moda Unisex </h1>
							<h1 class="mens_text"><strong>Nike Sportswear Club Fleece</strong></h1>
							<p class="lorem_text"> Siempre suave y confeccionada con un ajuste relajado, es una prenda básica que te ayuda a hacer más. </p>
              <button class="buy_bt" onclick="window.location.href='https://mpago.la/12bm4iq';">Comprar</button>
							<button class="more_bt" onclick="window.location.href='producto.php?id=23';">Ver Más</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="images/nike-pareja2.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">Buzo de Moda Unisex </h1>
							<h1 class="mens_text"><strong>Nike Sportswear Club Fleece</strong></h1>
							<p class="lorem_text">Este buzo imprescindible de cuello redondo es ideal para combinar con otras prendas en los días más fríos, y es una forma rápida y sencilla de agregar calidez a tu campera favorita.</p>
							<button class="buy_bt" onclick="window.location.href='https://mpago.la/12bm4iq';">Comprar</button>
							<button class="more_bt" onclick="window.location.href='producto.php?id=23';">Ver Más</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="images/nike-pareja3.png"></div>
					</div>
				</div>
                </div>

            </div>
        </div>
    </div>
</section>
			</div>
		</div>
	</div>
	<!-- header section end -->
	<!-- new collection section start -->
    <div class="layout_padding collection_section">
    	<div class="container">
    	    <h1 class="new_text"><strong>New  Collection</strong></h1>
    	    <p class="consectetur_text">Chaqueta vaquera estilo camionero con efecto craquelado</p>
    	    <div class="collection_section_2">
    	    	<div class="row">
    	    		<div class="col-md-6">
    	    			<div class="about-img">
    	    				<button class="new_bt">New</button>
    	    				<div class="shoes-img"><img src="images/supreme-campera.png"></div>
    	    				<p class="sport_text">Campera Supreme</p>
    	    				<div class="dolar_text">$<strong style="color: #f12a47;">250.000</strong> </div>
    	    				<div class="star_icon">
    	    					<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    	    				</div>
    	    			</div>
                <button class="seemore_bt"><a href="camperaSupremeDetalle.php" role="button">Ver Más</a></button>

    	    		</div>
    	    		<div class="col-md-6">
    	    			<div class="about-img2">
    	    				<div class="shoes-img2"><img src="images/supreme-campera-back.png"></div>
    	    				<p class="sport_text">Campera Supreme</p>
    	    				<div class="dolar_text">$<strong style="color: #f12a47;">250.000</strong> </div>
    	    				<div class="star_icon">
    	    					<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    	    				</div>
    	    			</div>
    	    		</div>
    	    	</div>
    	    </div>
    	</div>
    </div>

    <div class="collection_section layout_padding">
    	<div class="container">
    		<h1 class="new_text"><strong>Todos los productos</strong></h1>
    	    <p class="consectetur_text">

En Pullo, te ofrecemos una amplia variedad de ropa deportiva. Descubre nuestras colecciones de alta calidad que combinan estilo y comodidad. Cada pieza está creada pensando en tu rendimiento y bienestar, utilizando materiales de primera para asegurar durabilidad y confort.
Explora todos nuestros productos y encuentra el outfit perfecto para tus entrenamientos y actividades diarias.<br>
¡Bienvenido a Pullo, donde el deporte y la moda se unen! </p>
    	</div>
    </div>
	<!-- new collection section end -->
	<!-- New Arrivals section start -->
    <div class="layout_padding gallery_section">
      <section>
  <div class="container">
    <div class="row">

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
      $consulta='SELECT * FROM ropa';

      // 3) Ejecutar la orden y obtenemos los registros
      $datos= mysqli_query($conexion, $consulta);

      // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
      while ($reg = mysqli_fetch_array($datos)) {?>
        <div class="card col-sm-12 col-md-6 col-lg-3">
        <div class="">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="300px") class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
              <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen2'])?>" alt="" width="100px" height="300px") class="d-block w-100" alt="...">
            </div>

          </div>
        </div>
        </div>

            <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
            <span>$ <?php echo $reg['precio']; ?></span>

        </div>

      <?php } ?>

    </div>
  </div>
</section>
</div>
    			</div>
    		</div>

    	</div>
    </div>
   	<!-- New Arrivals section end -->
   	<!-- contact section start -->
    <div class="layout_padding contact_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Contactanos</strong></h1>
    	</div>
    	<div class="container-fluid ram">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="email_box">
                    <div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Phone Numbar" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="Email">
                            </div>

                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            </div>
                          </form>
                       </div>
                       <div class="send_btn">
                        <button class="main_bt">Enviar</button>
                       </div>
                    </div>
    		</div>
    			</div>
    			<div class="col-md-6">
    				<div class="shop_banner">
    					<div class="our_shop">
    						<button ></button>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
   	<!-- contact section end -->
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
