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
  <title>perfilCandidato</title>
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
          <li><a href="#informacionP">Datos de Perfil</a></li>
          <li><a href="#mensajes">Bandeja de Menajes</a></li>
          <li><a href="Curriculum.php">Crear CV</a>
          <li><a href="index.php">Cerrar Sesión</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  <!--<a href="http://url.pagina.destino/?variable1=valor1&variable2=valor2">Enlace a página de destino</a>-->
<!--==========================
Iformación de Contacto Section
============================-->
  <?php //Obtenemos los datos de la empresa
    include("php/conexion.php");
    $user_id=$_SESSION["user_id"];
    $sql1= "select nombre_Candidato, direccion_Candidato, tel_Candidato from candidato where id_Candidato='$user_id'";
      $query = $con->query($sql1);
      while ($r=$query->fetch_array()) {
        $nombre=$r["nombre_Candidato"];
        $dir=$r["direccion_Candidato"];
        $tel=$r["tel_Candidato"];
        break;
      }
  ?>
  <section id="informacionP">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Información Personal</h3>
          <div class="section-title-divider"></div>
             <div>
               <br>
               <img src="img/perfil.png" alt="" width="400" height="350">
               <label id="label"> Nombre: <?php echo $nombre;?> <br><br> 
                   <label id="label"> Dirección: <?php echo $dir;?>  <br><br> 
                   <label id="label"> Teléfono: <?php echo $tel;?>  <br><br>
             </div>
           </div>
      </div>
     </div>
    </div>
  </section>
  <br><br>
  <!--==========================
     Messages Section
 ============================-->
  <section id="mensajes">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Estatus de Solicitud</h3>
          <div class="section-title-divider"></div>
              <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1> 
                  <TR><th>&nbsp;Correo&nbsp;</th><th>&nbsp;Nombre de la empresa</th><th>&nbsp;Nombre del jefe &nbsp;</th><th>&nbsp;Dirección&nbsp;</th><th>&nbsp;Teléfono&nbsp;</th><th>&nbsp;Vacante&nbsp;</th></TR>  
            <?php 
              include("conexion.php"); 
              $link=Conectarse();
              $user_id=$_SESSION["user_id"];
              $resultSol=mysqli_query($link,"select * from solicitud_vacantes where id_Candidato=$user_id");
              while($rowsol= mysqli_fetch_array($resultSol))
              { 
                $iddc=$rowsol["id_Empresa"];
                $iddvac=$rowsol["id_Vacante"];
                $resultC=mysqli_query($link,"select * from empresa where id_Empresa= $iddc");  
                $resultcan=mysqli_query($link,"select * from vacante where id_Vacante=$iddvac"); 
                $rowVacante= mysqli_fetch_array($resultcan);             
                $rowEmpresa= mysqli_fetch_array($resultC);
                if($rowEmpresa!=null){
                  printf("<tr><td>&nbsp;%s</td>
                          <td>&nbsp;%s&nbsp;</td>
                          <td>&nbsp;%s&nbsp;</td>
                          <td>&nbsp;%s&nbsp;</td>
                          <td>&nbsp;%s&nbsp;</td>
                          <td>&nbsp;%s&nbsp;</td>
                          </tr>",$rowEmpresa["correo_Empresa"],$rowEmpresa["nombre_Empresa"],$rowEmpresa["Nombre_J"],$rowEmpresa["direccion_Empresa"],$rowEmpresa["tel_Empresa"],$rowVacante["nombre_Vacante"]); 
                }
              } 
            ?>
              </TABLE>
              <br><br>
               <label> ":)" </label>
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
              &copy; Copyright <strong>Adecco</strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- 
                All the links in the footer should remain intact. 
                You can delete the lisnks only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
              -->
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