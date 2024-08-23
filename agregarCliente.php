<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);

$prenda=$datos["prenda"];
$marca=$datos["marca"];
$talle=$datos["talle"];
$precio=$datos["precio"];
//Guardo los datos de la compra en la variable $compra
$compra = $datos["prenda"] . ' ' . $datos["marca"] . ' ' . $datos["talle"] . ' ' . $datos["precio"];
?>

<?php
if(array_key_exists('guardar_cliente',$_POST)){

$nombre = $_POST ['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];




//3) Preparar la orden SQL
// INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_a_ingresar)
// => Ingresa dentro de la siguiente tabla los siguientes valores
// a) generar la consulta a realizar
$consulta = "INSERT INTO clientes (id,nombre,apellido,mail,telefono,compra)
VALUES ('','$nombre','$apellido','$mail','$telefono','$compra')";

// a) ejecutar la consulta
mysqli_query($conexion,$consulta);
// a) rederigir a index
header('Location:' . $datos['pago']);
}?>

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

                           <a class="nav-item nav-link last" ></a>
                           <a class="nav-item nav-link last" ></a>
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
	<!-- header section end -->
  <div class="collection_text">Datos del cliente</div>
  <div class="layout_padding contact_section">
    <div class="container">
      <h1 class="new_text"><strong>Ingrese sus datos para poder realizar su compra</strong></h1>
    </div>
    <div class="container-fluid ram">
      <div class="row">
        <div class="col-md-6">
          <div class="email_box">
                  <div class="input_main">
                     <div class="container">
                        <form method="POST" action="">
                          <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Nombre" name="nombre">
                          </div>
                          <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Apellido" name="apellido">
                          </div>
                          <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Mail" name="mail">
                          </div>
                          <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Teléfono" name="telefono">
                          </div>
                          <div class="send_btn">
                            <input class="main_bt" type="submit" name="guardar_cliente" value="Enviar">
                          </div>

                        </form>
                     </div>

                  </div>
      </div>
        </div>



        <div class="col-md-6">
          <div class="shop_banner">
            <div class="our_shop">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- contact section end -->
	<!-- New Arrivals section start -->

   	<!-- New Arrivals section end -->
   	<!-- contact section start -->

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
