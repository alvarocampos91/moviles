<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro de inmuebles</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Inmuebles
    Theme URL: https://bootstrapmade.com/Inmuebles-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"data-target="#navegacion-fm">
					<span class="sr-only">Desplegar / Ocultar Menu </span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					
				</button>
				<a href="#" class="navbar-brand">ENCUENTRA TU ESPACIO</a>
			</div>
			<!-- inicia menu-->
			<div class="collapse navbar-collapse" id="navegacion-fm">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Inicio</a></li>
					<li class="dropdown">
						<a href="IniciarSesion.php" class="dropdown-toggle" data-toggle="dropdown" role="button">
						LOGIN <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<a href="IniciarSesion.php">Iniciar</a>
						</ul>	
					</li>
					<li class="dropdown">
						<a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button">
						REGISTRARSE <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<a href="Registro.php">Registrate aqui</a>
						</u>
					</li>
				</u>	
		</div>		
	  </nav>
		<!--<div class="container">
          <!-- Use any element to open the sidenav -->
        <!--</div>-->
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">¡ETE!</h1>
            <p>Registra tu espacio vacio</p>
            <section id="formulario">
             <script language= "javascript" type= "text/javascript">
              function enviarDatos()
                 {
                     alert( 'Datos guardados correctamente');
                 }
            </script>

            <form role="form" name="registro" action="php/registroInmueble.php" method="post">
                    <br><br> &nbsp;<label id="label">Dirrecion : 
                         <input  title="Necesita poner la direccion" type="text" name="Dirección_lugar" id="name" placeholder="Direccion completa" maxlength="40" required/>  </label>
              &nbsp;&nbsp;
               <label id="label">  Servicios:
                     <input title="Necesita los servicios" type="text" name="Servicios" id="servicios" placeholder="servicios" maxlength="30" required/>         
                 </label>&nbsp;&nbsp;&nbsp;&nbsp;
               <label id="label"> Ultimo uso: 
                      <input title="Necesita el ultimo uso" type="text" name="Ultimos_usos" id="uso" placeholder="uso" maxlength="30" required/>         
                 </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
               <label id="label">Precio:
                     <input type="number" name="Precio" id="precio" placeholder="Precio del inmueble" maxlength="50" required />
                 </label>
                 </label>&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <br><br>
               <button type="submit" class="btn btn-default">Registrar</button>&nbsp;&nbsp;&nbsp;
               <button type="reset" class="btn btn-default">Cancelar</button>&nbsp;&nbsp;&nbsp;
               <a href="PerfilUsuario.php" class="btn btn-default"><i class="fa fa-chevron-up"></i></a>
               
            </form>
          </section>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  


  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              © ETE Theme. All Rights Reserved
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Inmuebles
                -->
                
              </div>
            </p>
          
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
