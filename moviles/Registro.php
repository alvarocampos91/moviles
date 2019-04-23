<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro de Usuarios</title>
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
            <p>Encuentra tu espacio ideal!!</p>
            <section id="formulario">
             <script language= "javascript" type= "text/javascript">
              function enviarDatos()
                 {
                     alert( 'Datos guardados correctamente');
                 }
            </script>

            <form role="form" name="registro" action="php/registroUsuario.php" method="post">
                    <br><br> &nbsp;<label id="label">Nombre : 
                         <input  title="Necesita poner su nombre" type="text" name="name" id="name" placeholder="Nombre completo" maxlength="40" required/>  </label>
              &nbsp;&nbsp;
               <label id="label"> e-mail :
                     <input title="Necesita poner un email valido" type="email" name="email" id="email" placeholder="Email" maxlength="30" required/>         
                 </label>&nbsp;&nbsp;&nbsp;&nbsp;
               <label id="label"> Curp: 
                      <input title="Necesita poner un Curp valido" type="text" name="curp" id="curp" placeholder="Curp" maxlength="30" required/>         
                 </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
               <label id="label">Calle:
                     <input type="text" name="calle" id="calle" placeholder="Calle del Usuario" maxlength="50" required />
                 </label>
                 <label id="label">Colonia :
                     <input type="text" name="colonia" id="colonia" placeholder="Colonia" maxlength="20" required />         
                 </label>
                 <label id="label"> Estado: 
                      <input type="text" name="estado" id="estado" placeholder="Estado" maxlength="15" required />         
                 </label><br><br>
               <label id="label">Pais :
                     <input type="text" name="pais" id="pais" placeholder="Pais" maxlength="15" required />
                     </label>
                 <label id="label"> Teléfono :
                      <input type="text" name="telefono" id="telefono" placeholder="Teléfono" maxlength="10" required pattern="[0-9]{10}"/>         
                 </label>
               <label id="label">Login :
                     <input type="text" name="login" id="login" placeholder="Nombre de usuario" maxlength="15" required />
                 </label><br><br>
                 <label id="label">Password :
                     <input type="password" name="password" id="password" placeholder="Contraseña" maxlength="15" required />
				<label id="label">Giro comercial :
                     <input type="text" name="giro_comercial" id="giro_comercial" placeholder="Giro" maxlength="15" required />					 
					 
                 </label>&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <br><br>
               <button type="submit" class="btn btn-default">Registrar</button>&nbsp;&nbsp;&nbsp;
               <button type="reset" class="btn btn-default">Cancelar</button>&nbsp;&nbsp;&nbsp;
               <a href="IniciarSesion.php" class="btn btn-default"><i class="fa fa-chevron-up"></i></a>
               
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
