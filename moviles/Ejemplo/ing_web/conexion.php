<?php 
function Conectarse() 
{ 
   $link=mysqli_connect("localhost","root","","travago_db");
   if (!($link)) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysqli_select_db($link,"travago_db")) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 
?>
