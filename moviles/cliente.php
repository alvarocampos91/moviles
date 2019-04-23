<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inmuebles</title>
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
        <div class="container">
          <!-- Use any element to open the sidenav -->
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">Inmuebles Online</h1>
            <p>Encuentra tu espacio ideal!!</p>
            <br>
            <p3 class="header-p">Hemos cambiado la experiencia de la búsqueda de una nueva casa, con la convicción de poder transformar el mundo del inmueble, haciendo que nuestros usuarios puedan elegir una de nuestras varias opciones que ofrece nuestra aplicacion y asi ayudandolos a buscar un hogar, en vez de un lugar donde vivir. </p3><br><br><br><br>
            <section id="formulario">
             <form action="cliente.php" method="post">
                  <div class="ui-field-contain">
                       <label for="name">Nombre:</label>
                       <input type="text" name="nombreform" id="nombre" value="" />&nbsp;&nbsp;&nbsp;&nbsp;
                       <label for="name">Calle:</label>
                       <input type="text" name="calleform" id="calle" value="" /><br>&nbsp;
                       <label for="name">Colonia:</label>
                       <input type="text" name="coloniaform" id="colonia" value="" />&nbsp;&nbsp;
                       <label for="name">Estado:</label>
                       <input type="text" name="estadoform" id="estado" value="" /><br>&nbsp;&nbsp;&nbsp;&nbsp;
                       <label for="name">NRC:</label>
                       <input type="text" name="nrcform" id="nrc" value="" />&nbsp;&nbsp;&nbsp;&nbsp;
                       <label for="name">Tipo:</label>
                       <input type="text" name="tipoform" id="tipo" value="" /><br>
                       <label for="name">Direccion:</label>
                       <input type="text" name="direcform" id="direc" value="" />&nbsp;&nbsp;&nbsp;&nbsp;
                       <label for="name">Precio:</label>
                       <input type="text" name="precioform" id="precio" value="" /><br>
                  </div>

            <div class="ui-field-contain"><br><br>
          <input type="submit"  name="submit" value="Validar Datos" />&nbsp;&nbsp;
          <a href="impresion.php" class="btn btn-default">Descargar&nbsp;&nbsp;<i class="fa fa-chevron-up"></i></a>
          <br><br><br><br>
        </div>
        
      </form>
          </section>
      
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  
<?php
  if ((isset($_POST["nombreform"])&& !empty($_POST["nombreform"])) && (isset($_POST["calleform"])&& !empty($_POST["calleform"])) && (isset($_POST["coloniaform"])&& !empty($_POST["coloniaform"])) && (isset($_POST["estadoform"])&& !empty($_POST["estadoform"])) && (isset($_POST["nrcform"])&& !empty($_POST["nrcform"]))&& (isset($_POST["tipoform"])&& !empty($_POST["tipoform"]))&& (isset($_POST["direcform"])&& !empty($_POST["direcform"]))&& (isset($_POST["precioform"])&& !empty($_POST["precioform"])) ){

    require_once '/storage/ssd5/114/4829114/public_html/lib2/nusoap.php';
    $wsdl="http://modeladoprimavera.000webhostapp.com/servicio.php?wsdl";
    $client =new nusoap_client($wsdl,'wsdl');
    $nombre=$_POST['nombreform'];
    $calle=$_POST['calleform'];
    $colonia=$_POST['coloniaform'];
    $estado=$_POST['estadoform'];
    $nrc=$_POST['nrcform'];
    $tipo=$_POST['tipoform'];
    $direc=$_POST['direcform'];
    $precio=$_POST['precioform'];
    $parametros=array('nombre'=>$nombre,'calle'=>$calle,'colonia'=>$colonia,'estado'=>$estado,'nrc'=>$nrc,'tipo'=>$tipo,'direc'=>$direc,'precio'=>$precio);

    
    $response = $client->call('MiFuncion',$parametros);
    $file = fopen("archivo.txt", "w");
    fwrite($file, $direc );
    fwrite($file, $tipo );
    fwrite($file, $precio );
    
	$file2 = fopen("archivo2.txt", "w");
    fwrite($file2, $nombre);
    fwrite($file2, $calle);
    fwrite($file2, $colonia);
    fwrite($file2, $estado);
    fwrite($file2, $nrc );
    fclose($file2);
    
	echo"Mensaje: <br>";
    echo "<pre>";
    print_r($response);
    echo"</pre>";

  }

  

?>﻿

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
              © Inmuebles Theme. All Rights Reserved
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
