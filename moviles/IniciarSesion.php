<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login</title>
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
						LOGIN <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<a href="IniciarSesion.php">Iniciar</a>
						</ul>	
					</li>
					<li class="dropdown">
						<a href="Registro.php"class="dropdown-toggle" data-toggle="dropdown" role="button">
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
            <p>Encuentra tu espacio ideal!!</p>
            <br>
            <section id="formulario">
             <form role="form" name="login" action="php/login.php" method="post">
                     &nbsp;&nbsp;&nbsp;&nbsp;<label id="label">Usuario : 
                         <input type="text" name="login" id="login" placeholder="Usuario" />         
                     </label>
               <br><br>
               <label id="label">Password :
                     <input type="password" name="password" id="password" placeholder="password" />         
                 </label><br><br><br>
                 <div class="actions">   
                     <button type="submit" class="btn btn-default">Iniciar</button>&nbsp;&nbsp;
                     <button type="reset" value="Cancelar" class="btn btn-default">Cancelar</button>&nbsp;&nbsp;&nbsp;
                     <a href="index.html" class="btn btn-default"><i class="fa fa-chevron-up"></i></a>
               <br><br>
                     Crea una cuenta nueva <br><br>
                     <a href="Registro.php" class="btn-get-started" >Registrarse</a>
                     <br><br>
                 </div>               
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
