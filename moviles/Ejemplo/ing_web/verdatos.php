<html> 
<head> 
   <title>Ejemplo de Visualizar datos de una BD</title> 
</head> 
<body> 
<H2>Datos de la BD videoteca</H2> 
<hr>
<?php 
   include("conexion.php"); 
   $link=Conectarse(); 
   $result=mysqli_query($link,"select * from vacante"); 
?> 
   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1> 
      <TR><TD>&nbsp;ID</TD><TD>&nbsp;Titulo</TD><TD>&nbsp;Director&nbsp;</TD>
          <TD>&nbsp;Actor&nbsp;</TD></TR> 
<?php       

   while($row = mysqli_fetch_array($result)) { 
      printf("<tr><td>&nbsp;%d</td>
                  <td>&nbsp;%s</td>
                  <td>&nbsp;%s&nbsp;</td>
                  <td>&nbsp;%s&nbsp;</td>
               </tr>",$row["id_Vacante"], $row["descripcion_Vacante"],$row["rango_Salarial"],$row["requisitos_Vacante"]); 
   } 
   mysqli_free_result($result); 
   mysqli_close($link); 
?> 
</table> 
</body> 
</html> 

