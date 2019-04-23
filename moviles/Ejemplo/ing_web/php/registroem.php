<?php


if(!empty($_POST)){


			include "conexion.php";
			$nombreE=$_POST['nombreE'];
			$nombrej=$_POST['nombreJ'];
			$direccione=$_POST['direccione'];
			$telefonoe=$_POST['telefonoe'];
			$emaile=$_POST['emaile'];
			$logine=$_POST['logine'];
			$passe=$_POST['passe'];
			
			$found=false;
			$sql1= "select * from empresa where loggin_Empresa='$logine' or direccion_Empresa='$emaile'";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registroEmpresa.php';</script>";
			}
			else{
			$sql = "insert into empresa(nombre_Empresa,Nombre_J,direccion_Empresa,tel_Empresa,correo_Empresa,loggin_Empresa,password_Empresa) values ('$nombreE','$nombrej','$direccione', '$telefonoe','$emaile','$logine','$passe')";

			$query = $con->query($sql);
			if($query === TRUE){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../index.php';</script>";
			                }
		   
		    else{
		    	 echo "Error: " . $sql . "<br>" . $con->error;
		    }
		    $con->close();
		}
	
}



?>