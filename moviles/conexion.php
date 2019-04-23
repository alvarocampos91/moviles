<?php 
function Conectarse() 
{ 
   $link=mysqli_connect("modeladoprimavera.000webhostapp.com","id4829114_rankuth","","id4829114_inmueblea");
   if (!($link)) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysqli_select_db($link,"inmuebles")) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 
?>
