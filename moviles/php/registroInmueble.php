<?php


if(!empty($_POST)){


			include "conexion.php";
			$direccion=$_POST['Dirección_lugar'];
			$servicios=$_POST['Servicios'];
			$ultimos_usos=$_POST['Ultimos_usos'];
			$precio=$_POST['Precio'];
			
			$found=false;
			$sql1= "select * from inmueble";
			$query = $con->query($sql1);
			/*while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}
			else{*/
			$sql = "insert into inmueble(Dirección_lugar,Servicios,Ultimos_usos,Precio) values ('$direccion','$servicios','$ultimos_usos','$precio')";

			$query = $con->query($sql);
			if($query === TRUE){
				print "<script>alert(\"Registro exitoso. \");window.location='../PerfilUsuario.php';</script>";
			                }
		   
		    else{
		    	 echo "Error: " . $sql . "<br>" . $con->error;
		    }
		    $con->close();
		}
	
