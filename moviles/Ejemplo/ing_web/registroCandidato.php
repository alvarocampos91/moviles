<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>registroCandidato</title>
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
      </div>
    </div>
  </section>    

</html>

<!--==========================
Create CV Section
============================-->
  <section id="crearCV">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Registro de usuario </h3>
          <div class="section-title-divider"></div>
        </div>
      </div>
          <section id="formulario">
             <script language= "javascript" type= "text/javascript">
             function mostrarDatos()
                 {
                     alert( 'Nombre: ' + formDatos.name.value + 
                          '\nEdad: ' + formDatos.edad.value + 
                          '\nSexo: ' + formDatos.sexo.value + 
                          '\nDirección: ' + formDatos.direccion.value +
                          '\nTeléfono: ' + formDatos.telefono.value +  
                          );
                 }
                 function enviarDatos()
                 {
                     alert( 'Datos guardados correctamente');
                 }
            </script>

            <form role="form" name="registro" action="php/registroca.php" method="post">
                     <label id="label">Nombre : 
                         <input  title="Necesita poner su nombre" type="text" name="nombreca" id="nombreca" placeholder="Nombre completo" maxlength="40" required/>         
                     </label>
               <br><br>
               <label id="label"> e-mail :
                     <input title="Necesita poner email correcto" type="email" name="emailc" id="emailc" placeholder="Email" maxlength="30" required/>         
                 </label><br><br>
               <label id="label"> Teléfono de Contacto (Número de 10 digitos comprendidos del 0-9): <br>
                      <input type="text" name="telefonoc" id="telefonoc" placeholder="Teléfono" maxlength="10" required pattern="[0-9]{10}"/>         
                 </label><br><br>
               <label id="label">Login :
                     <input type="text" name="loginc" id="loginc" placeholder="Nombre de usuario" maxlength="15" required />
                 </label><br><br>
                 <label id="label">Password
                     <input type="password" name="passc" id="passc" placeholder="Contraseña" maxlength="15" required />         
                 </label><br>
                <br>
               <button type="submit" class="btn btn-default">Registrar</button>
               <input type="reset" value="Limpiar Formulario" id="boton" align="center">
               <br><br>
               <label> Thank you</label>
               
            </form>
          </section>
      
      </div>
    </div>
  </section>
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