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
  <title>Evaluador</title>
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
     <?php 
        include("conexion.php"); 
        $link=Conectarse(); 
        $resultVacante=mysqli_query($link,"select * from vacante where vigente=1"); 
        $resultCandidato=mysqli_query($link,"select * from candidato");
        $resultEmpresa=mysqli_query($link,"select * from empresa");
     ?> 
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
          <li><a href="#listaOL">Información de la BD</a></li>
          <li><a href="#candidatos">Evaluar Candidatos</a></li>
          <li><a href="index.php">Cerrar Sesión</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  
   
  

   <?php //Obtenemos los datos del evaluador
    include("php/conexion.php");
    $user_id=$_SESSION["user_id"];
    $sql1= "select nombre_Usuario, direccion_Usuario, tel_Usuario from evaluador where id_Usuario='$user_id'";
      $query = $con->query($sql1);
      while ($r=$query->fetch_array()) {
        $nombre=$r["nombre_Usuario"];
        $dir=$r["direccion_Usuario"];
        $tel=$r["tel_Usuario"];
        break;
      }
  ?>


<!--==========================
Iformación de Contacto Section
============================-->
  <section id="informacionP">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">TRAVAGO</h3>
          <div class="section-title-divider"></div>
            <img src="img/empresa.png" alt="" width="250" heght="250">
                   <label id="label"> Nombre: <?php echo $nombre;?>  <br><br> 
                   <label id="label"> Dirección:  <?php echo $dir;?>  <br><br> 
                   <label id="label"> Teléfono : <?php echo $tel;?> <br><br>
           </div>
      </div>
     </div>
    </div>
  </section>
  <br><br>
  
 <!--==========================
     OfertasLaborales Section
 ============================-->
  <section id="listaOL">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title"> Información Existente en el Sistema</h3>
          <div class="section-title-divider"></div>
            <form name="formDatos" id="formDatos">
              <label>Empresas</label>
               <br><br>
               <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1> 
                  <TR><th>&nbsp;ID&nbsp;</th><th>&nbsp;Nombre de la Empresa&nbsp;</th><th>&nbsp;Jefe de la Empresa&nbsp;</th><th>&nbsp;Dirección&nbsp;</th><th>&nbsp;Teléfono&nbsp;</th><th>&nbsp;Correo&nbsp;</th></TR> 
                  <?php       
                    while($row = mysqli_fetch_array($resultEmpresa))
                      { 
                        printf("<tr><td>&nbsp;%d</td>
                                    <td>&nbsp;%s</td>
                                    <td>&nbsp;%s</td>
                                    <td>&nbsp;%s</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                </tr>",$row["id_Empresa"],$row["nombre_Empresa"],$row["Nombre_J"], $row["direccion_Empresa"],$row["tel_Empresa"],$row["correo_Empresa"]); 
                      } 
                  mysqli_free_result($resultEmpresa); 
                ?>   
              </table><br>
              <label>Vacantes</label>
              <br><br>
               <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1> 
                  <TR><th>&nbsp;ID&nbsp;</th><th>&nbsp;Nombre de la Vacante&nbsp;</th><th>&nbsp;Descripción de la Vacante&nbsp;</th><th>&nbsp;Rango Salarial&nbsp;</th><th>&nbsp;Jornada&nbsp;</th><th>&nbsp;Requisitos de la Vacante&nbsp;</th><th>&nbsp;ID de Empresa&nbsp;</th></TR> 
                  <?php       
                    while($row = mysqli_fetch_array($resultVacante))
                      { 
                        printf("<tr><td>&nbsp;%d&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%d&nbsp;</td>
                                </tr>",$row["id_Vacante"],$row["nombre_Vacante"], $row["descripcion_Vacante"],$row["rango_Salarial"],$row["jornada"],$row["requisitos_Vacante"],$row["id_Empresa"]); 
                      } 
                  mysqli_free_result($resultVacante); 
                ?>   
              </table><br>
              <label>Información de Candidatos</label>
              <br><br>
              <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1> 
                  <TR><th>&nbsp;ID Candidato&nbsp;</th><th>&nbsp;Nombre del Candidato&nbsp;</th><th>&nbsp;Edad&nbsp;</th><th>&nbsp;Sexo&nbsp;</th><th>&nbsp;Dirección&nbsp;</th><th>&nbsp;Retribución Mínima&nbsp;</th><th>&nbsp;Jornada Laboral&nbsp;</th><th>&nbsp;Grado de Estudios&nbsp;</th><th>&nbsp;Habilidades&nbsp;&nbsp;</th></TR>  
                  <?php       
                    while($row = mysqli_fetch_array($resultCandidato))
                      { 
                        $iddc=$row["id_Candidato"];
                        $resultEvalua=mysqli_query($link,"select * from cv where id_Candidato= $iddc");
                        $rowCv= mysqli_fetch_array($resultEvalua); 
                        printf("<tr><td>&nbsp;%d&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                    <td>&nbsp;%s&nbsp;</td>
                                </tr>",$iddc,$rowCv["nombreCV"],$rowCv["edad"],$rowCv["sexo"],$rowCv["dircv"],$rowCv["retribucion_Minima"],$rowCv["tipo_Jornada"],$rowCv["grado_Estudios"],$rowCv["habilidades"]); 
                      } 
                  mysqli_free_result($resultCandidato); 
                ?>   
              </table> 
              <br><br>
            </form>
          </div>               
        </div>
      </div>
    </div>
  </section> 

 
  <!--==========================
     CVs Section
 ============================-->
   <section id="candidatos">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title"> Evalua Candidato</h3>
          <div class="section-title-divider"></div>
            <form name="showData" method="POST">
              <br>
              <label id="label">ID del Candidato: <input type="text" name="idC"> </label>
              <br><br>
              <label id="label">ID de la oferta: <input type="text"  name="idOf"> </label>
              <br><br>
              <button type="submit" name="uploadCand">Aceptar Candidato</button>
              <br><br> 
            </form>
                  <?php
                    if(isset($_POST['uploadCand'])){
                      $idvac= $_POST['idOf'];
                      $idcan = $_POST['idC'];

                      $resultEvalua=mysqli_query($link,"select * from vacante where id_Vacante= $idvac");
                      $row = mysqli_fetch_array($resultEvalua); 
                      $idemp = $row["id_Empresa"];
                      mysqli_query($link,"insert into solicitud_vacantes(id_Vacante,id_Candidato,id_Empresa)values('$idvac','$idcan','$idemp')");   
                    }
                  ?>
            <br><br>
          </div>  
          <br><br>
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