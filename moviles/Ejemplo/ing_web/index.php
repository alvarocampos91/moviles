<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>::Travago::</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  
  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 
  
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div id="preloader"></div>
  
<!--==========================
  Hero Section
============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
        </div>
        
        <h1>Reclutamineto de Personal</h1>
        <h2>Queremos <span class="rotating">Ayudarte</span></h2>
        <div class="actions">
          <a href="#inicioSesion" class="btn-get-started">Iniciar Sesión</a>
        </div>
      </div>
    </div>
  </section>
  
<!--==========================
  Header Section
============================-->
  <header id="header">
    <div class="container">
    
      <div id="logo" class="pull-left">
        
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>
        
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Acerca de Nosotros</a></li>
          <li><a href="#inicioSesion">Iniciar Sesión</a></li>
          <li><a href="#team">Nuestro Equipo</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
    
<!--==========================
  About Section
============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Acerca de Nosotros</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Hemos reinventado la experiencia de reclutamiento para acompañarte en cada etapa de tu búsqueda de empleo, con la convicción de poder transformar el mundo del trabajo a través de personas que aman lo que hacen.</p> 
          <p class="section-description">No solo hemos lanzado una nueva imagen que empata con la era digital, lo más importante es que hemos innovado en nuestra filosofía de servicio al cliente para crear una nueva experiencia Adecco.</p>
          <p class="section-description"> <h3 align="center" class="section-title" >¿Por qué Travago?</h3><br><br>

            Somos la empresa de servicios de Recursos Humanos más grande del mundo, diariamente conectamos a más de 700,000 colaboradores con miles de clientes en más de 60 países. Este expertise nos permite ofrecer un apoyo de calidad a todos nuestros clientes, conectándolos con el talento adecuado a través de los diversos servicios de capital humano que ofrecemos. </p>
        </div>
      </div>
    </div>
  </section>
  
<!--==========================
  Services Section
============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Beneficios de Travago</h3>
          <div class="section-title-divider"></div>
        </div>
      </div>
        
      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-desktop"></i></div>
          <p class="service-description">Contamos con una aplicación que te permite encontrar las mejores oportunidades laborales sin importar en donde te encuentres.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <p class="service-description">Nuestro servicio es gratuito, y al ser contratado nos aseguramos de que contarás con las prestaciones de Ley (Seguridad Social, Vacaciones, Prima Vacacional y Aguinaldo).</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <p class="service-description">A través de nuestro blog te ofrecemos los mejores tips y consejos de expertos para que tu inclusión en el mundo laboral sea más sencilla y eficiente.</p>
        </div>
      </div>
    </div>  
  </section>
  

<!--==========================
   Inicio de Sesión 
============================-->
  <section id="inicioSesion">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Iniciar Sesión</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Escribe los datos para Iniciar Sesión</p>
        </div>
      </div>
          <section id="formulario">
             <script language= "javascript" type= "text/javascript">
             function mostrarDatos()
                 {
                     alert( 'Nombre: ' + formDatos.name.value + 
                          '\nEdad: ' + formDatos.edad.value );
                 }
                 function enviarDatos()
                 {
                     alert( 'Datos guardados correctamente');
                 }
            </script>

            <form role="form" name="login" action="php/logine.php" method="post">
                     <label id="label">Tipo de Usuario : 
                     <SELECT name="tipo">
                         <OPTION VALUE="candidato" SELECTED>Candidato
                         <OPTION VALUE="empresa">Empresa
                         <OPTION VALUE="evaluador">Evaluador
                     </SELECT>
                     <br><br>
                     <label id="label">Usuario o email: 
                         <input type="text" name="name" id="name" placeholder="nombre" />         
                     </label>
               <br><br>
               <label id="label">Password :
                     <input type="password" name="password" id="password" placeholder="password" />         
                 </label><br><br>
                 <div class="actions">   
                     <button type="submit" class="btn btn-default">Iniciar</button>
                     <input type="reset" value="Cancelar" id="boton">
                     <br><br>
                     Crea una cuenta nueva <br><br>
                     <a href="registroCandidato.php" class="btn-get-started" >Registro Candidato</a>
                     <br><br>
                     <a href="registroEmpresa.php" class="btn-get-started">Registro Empresa</a>
                     <br><br>
                 </div>               
            </form>
          </section>
      
      </div>
    </div>
  </section>

<!--==========================
  Team Section
============================-->    
  <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nuestro Equipo</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Integrantes del equipo de desarrollo</p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="fotos/.jpg" alt=""></div>
            <h4>GERARDO SAN MARTIN SUAREZ</h4>
            <span>Estudiante Ingenieria</span>
            <div class="social">
              <a href="https://twitter.com/Rai_Tapia"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/RaiiTapia"><i class="fa fa-facebook"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="fotos/.jpg" alt=""></div>
            <h4>LUIS ALBERTO HERNANDEZ RAMIREZ</h4>
            <span>Estudiante Ingenieria</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/pilar.merino.3511"><i class="fa fa-facebook"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="fotos/.jpg" alt=""></div>
            <h4>MAURICIO URIELA ALDANA BALLARTE</h4>
            <span>Estudiante Ingenieria</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/AldairRRtucrush"><i class="fa fa-facebook"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="fotos/.jpg" alt=""></div>
            <h4>JOSE ENRIQUE SEVILLA LARREA</h4>
            <span>Estudiante Ingenieria</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/kaelo0"><i class="fa fa-facebook"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="fotos/.jpg" alt=""></div>
            <h4>LUIS DAVID RIVERA ORTIZ</h4>
            <span>Estudiante Ingenieria</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
            </div>
          </div>
        </div>
        
      </div>  
    </div>
  </section>

<!--==========================
  Footer
============================--> 
  <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              &copy; Copyright <strong>Ing. Web</strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
              -->
              Ingenieria Web by <a href="http://rossainz.cs.buap.mx/ingWeb.html">Judith</a>
            </div>
          </div>
        </div>
      </div>
  </footer><!-- #footer -->
  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>
  
  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>
  
  <script src="contactform/contactform.js"></script>
  
    
</body>
</html>