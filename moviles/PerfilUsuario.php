<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>alert(\"Acceso invalido!\");window.location='IniciarSesion.php';</script>";
}

?>

<?php //Obtenemos los datos de la base dedatos
                      include("php/conexion.php");
                      $user_id=$_SESSION["user_id"];
                      $sql1= "select * from usuario where id_usuario='$user_id'";
                      $query = $con->query($sql1);
                      while ($r=$query->fetch_array()) {
                      $name=$r['name'];
                      $curp=$r['curp'];
                      $calle=$r['calle'];
                      $colonia=$r['colonia'];
                      $estado=$r['estado'];
                      $pais=$r['pais'];
                      $telefono=$r['telefono'];
					  $giro_comercial=$r['giro_comercial'];
                      break;
                      }

                  ?>

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
    Key de la API de google maps:
    AIzaSyD-K97fpHBpf6Q7AIbw7P5My0YlkEl8IOs
  ======================================================= -->
</head>
<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#banner">Perfil</a>
            <a href="#list">Lista</a>
            <a href="#event">Ubicacion</a>
            <a href="index.html">Cerrar Sesion</a>
			<a href="AgregarInmueble.php">Agregar Inmueble</a>
            </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
            <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
        <h1 class="header-h">Bienvenido <?php echo $name ?></h1>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-11">
          <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  
                  <h2>Datos Personales: </h2>
                  <address>
                    <strong>Nombre: </strong><?php echo $name ?><br> 
                    <strong>Curp: </strong><?php echo $curp ?><br> 
                    <strong>Calle: </strong><?php echo $calle ?><br> 
                    <strong>Colonia: </strong><?php echo $colonia ?><br> 
                    <strong>Estado: </strong><?php echo $estado ?><br> 
                    <strong>Pais: </strong><?php echo $pais ?><br> 
                    <strong>Telefono: </strong><?php echo $telefono ?><br>
					<strong>Giro Comercial: </strong><?php echo $giro_comercial ?><br>
                  </address>
                  </div>
              </div>
            <div class="col-md-6 col-sm-6">
            <img src="img/hola.jpg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
  </div>
    </div>
  </section>
  <!-- / banner -->




  <!-- list -->
  <section id="list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Lista de Ofertas</h1>
          <p class="header-p">Desde Casas, Departamentos hasta Oficinas. </p>
        </div>



          
                   <?php //Obtenemos los datos de la base dedatos
                      include("php/conexion.php");
                      $sql1= "select * from casas";
                      $query = $con->query($sql1);
                      while ($r=$query->fetch_array()) {
                      $direccionC=$r['direccion_c'];
                      $cuartosC=$r['no_cuartos_c'];
                      $precioC=$r['precio_c'];
                      $telefonoC=$r['telefono_c'];
                      $correoC=$r['correo_c'];
                      $latitudC=$r['latitud_c'];
                      $longitudC=$r['longitud_c'];
                      $tipoC=$r['tipo'];

                                           

                  ?>

          <div class="dep menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#event" data-meal-img="img/rib.jpg"><?php echo $direccionC ?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">$<?php echo $precioC ?> MXN</span><br>
            </span>
            <span class="menu-subtitle"><H4>No. Cuartos: <?php echo $cuartosC ?>   <br>Tipo: <?php echo $tipoC ?> <br>Telefono: <?php echo $telefonoC ?><br>E-mail: <?php echo $correoC ?></H4></span><br>
            </div>


            <?php //temina el while
                      
                      }

                  ?>
      </div>
    </div>
  </section>
  <!--/ list -->



  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">Encuentra tu Casa en... Google maps </h1><br>
            <p class="header-p">Para poder ofrecerte un mejor servicio, puedes usar la aplicacion de google maps para ver los inmuebles y saber como llegar a ellas, si te interesa alguna solo llama al encargado de ese inmueble para que puedas ver su interior personalmente.</p>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            
            <div id="mapa" style="width:100%;height:480px;"></div><br>
          <?php
            $con = mysqli_connect("localhost","id4829114_rankuth","sakura","id4829114_inmueblea") or die("Error en la conexión.");
            $query = "select * from casas";
            $resultado = mysqli_query($con,$query);
          ?>
          <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyD-K97fpHBpf6Q7AIbw7P5My0YlkEl8IOs"></script>
            <script type="text/javascript">
            var bcn = new google.maps.LatLng(19.0345033,-98.217109);
            var mapOptions = {
                center: bcn,
                zoom:13,
                mapTypeId: google.maps.MapTypeId.ROADMAP
              };
            map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
          </script>
            <?php
              $i=1;
              while ($data = mysqli_fetch_assoc($resultado)) {
            ?>
            <script type="text/javascript">
              var marker<?php echo $i;?> = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $data['latitud_c']; ?>, <?php echo $data['longitud_c']; ?>),
                map: map,
                title: <?php echo "'".$data['direccion_c']."'"; ?>,
                icon: 'img/icono3.png',
              });
 
              var contentString = "<h4><span class='glyphicon glyphicon-asterisk' aria-hidden='true'></span>&#160;<?php echo "".$data['direccion_c'].""; ?></h4><p><span class='glyphicon glyphicon-screenshot' aria-hidden='true'></span>&#160;<b>Telefono</b><br> <?php echo "".$data['telefono_c'].""; ?></p><p><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>&#160;<b>E-mail</b><br><?php echo "".$data['correo_c'].""; ?></p>"
 
              var infowindow<?php echo $i;?> = new google.maps.InfoWindow({
                content: contentString
              });
 
              google.maps.event.addListener(marker<?php echo $i;?>, 'click', function() {
                infowindow<?php echo $i;?>.open(map,marker<?php echo $i;?>);
              });
            </script>
            <?php
                $i++;
              }
              mysqli_close($con);
            ?>
            <center><a class="btn btn-imfo btn-read-more" href="cliente.php">Crear Factura</a></center>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->





  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Inmuebles</h4>
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
