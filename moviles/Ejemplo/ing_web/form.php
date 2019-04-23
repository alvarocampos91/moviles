<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>cv</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  
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
Create CV Section
============================-->
  <section id="crearCV">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Crear CV</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Escribe los datos para crear tu CV</p>
        </div>
      </div>
          <section id="formulario">
             <script language= "javascript" type= "text/javascript">
             function mostrarDatos()
                 {
                     alert( 'Nombre: ' + formDatos.name.value + 
                          '\nEdad: ' + formDatos.edad.value + 
                          '\nSexo: ' + formDatos.sexo.value + 
                          '\nFecha de Nacimiento: ' + formDatos.date.value + 
                          '\nDirección: ' + formDatos.direccion.value +
                          '\nTeléfono: ' + formDatos.telefono.value +
                          '\nCorreo: ' + formDatos.correo.value + 
                          '\nEstado Civil: ' + formDatos.btnestado.value +  
                          '\nEstudios Realizados: ' + formDatos.chkestudios.value +
                          '\nDatos Adicionales: ' + formDatos.extras.value);
                 }
                 function enviarDatos()
                 {
                     alert( 'Datos guardados correctamente');
                 }
            </script>

            <form name="formDatos"  action="php/CV.php" method="post">
                     <h2 align="center"> Solicitud </h2>
                     <label id="label">Nombre
                         <input type="text" name="name" id="name" placeholder="Nombre" />         
                     </label>
               <br>
               <label id="label">Edad
                     <input type="text" name="edad" id="edad" placeholder="Edad" />         
                 </label><br>
               <label id="label">Sexo
                     <SELECT name="sexo">
                         <OPTION VALUE="Hombre" SELECTED>Hombre
                         <OPTION VALUE="Mujer">Mujer
                     </SELECT>
                 </label><br>
                 
               <label id="label">Dirección
                     <input type="text" name="direccion" id="direccion" placeholder="Dirección"/>
                 </label><br>

               <label id="label">Retribucion minima
                     <input type="text" name="retribucion" id="retriucion" placeholder="Retribucion"/>
                 </label><br>

                 <label id="label">Tipo de Jornada
                     <SELECT name="jornada">
                         <OPTION VALUE="Matutino" SELECTED>Matutino
                         <OPTION VALUE="Vespertino">Vespertino
                         <OPTION VALUE="Nocturno">Nocturno
                     </SELECT>
                 </label><br>

                  
               <label id="label">Estudios realizados
                     <SELECT name="estudio">
                         <OPTION VALUE="primaria" SELECTED>primaria
                         <OPTION VALUE="secundaria">secundaria
                         <OPTION VALUE="preparatoria">preparatoria
                         <OPTION VALUE="universidad">universidad
                     </SELECT>
                 </label><br>
                  
               <br><br>
               <label>Habilidades que posee:</label>
               <textarea class="form-control" name="extras" id="extras" placeholder="Información adicional " rows="10" ></textarea><br>
               <form action="myform.cgi">
                   <label for="fileupload"> Subir foto</label> 
                   <input type="file" name="foto" value="foto" id="foto">
                </form>
                <br><br>
               <input  type="submit"  value="Enviar Datos">
               <input type="button" value="Mostrar CV" id="boton" OnClick="javascript:mostrarDatos();"> 
               <input type="reset" value="Limpiar Formulario" id="boton">
               <br><br>
               <label> "Have Luck!" </label>
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