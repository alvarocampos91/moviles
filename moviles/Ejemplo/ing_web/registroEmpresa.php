<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>registroEmpresa</title>
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

<!--==========================
Create CV Section
============================-->
  <section id="crearCV">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Registro</h3>
          <h3 class="section-title"> <a href="index.php" >Home </a> </h3>
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

            <form role="form" name="registro" action="php/registroem.php" method="post">
                     <h2 align="center"> Registro de la Empresa</h2>
                     <label id="label">Nombre Empresa : 
                         <input type="text" name="nombreE" id="nombreE" placeholder="Nombre de empresa" required maxlength="40" />         
                     </label>
               <br><br>
               <label id="label">Nombre de jefe de personal :
                     <input type="text" name="nombreJ" id="nombreJ" placeholder="Nombre del jefe" required maxlength="80" />         
                 </label><br><br>
                 <label id="label">Direccion de la empresa :
                     <input type="text" name="direccione" id="direccione" placeholder="Direccion de la empresa" required maxlength="30" />         
                 </label><br><br>
               <label id="label"> Teléfono de Contacto :
                      <input type="text" name="telefonoe" id="telefonoe" placeholder="Teléfono" required maxlength="10" pattern="[0-9]{10}" />         
                 </label><br><br>
                 <label id="label">Correo electronico :
                     <input type="email" name="emaile" id="emaile" placeholder="Email" required maxlength="30" />         
                 </label><br><br>
               <label id="label">Usuario :
                     <input type="text" name="logine" id="logine" placeholder="Usuario empresa" required maxlength="15" />
                 </label><br><br>
                 <label id="label">Contraseña :
                     <input type="password" name="passe" id="passe" placeholder="Contraseña" required maxlength="15" />         
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
  
  <script src="contactform/contactform.js"></script>
  
    
</body>
</html>