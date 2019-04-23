<?php


if(!empty($_POST)){


			include "conexion.php";
			$name=$_POST['name'];
			$email=$_POST['email'];
			$curp=$_POST['curp'];
			$calle=$_POST['calle'];
			$colonia=$_POST['colonia'];
			$estado=$_POST['estado'];
			$pais=$_POST['pais'];
			$telefono=$_POST['telefono'];
			$login=$_POST['login'];
			$password=$_POST['password'];
			$giro_comercial=$_POST['giro_comercial'];
			
			$found=false;
			$sql1= "select * from usuario where login='$login' or email='$email'";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}
			else{
			$sql = "insert into usuario(name,email,curp,calle,colonia,estado,pais,telefono,login,password,giro_comercial) values ('$name','$email','$curp','$calle','$colonia','$estado','$pais','$telefono','$login','$password','$giro_comercial')";

			$query = $con->query($sql);
			if($query === TRUE){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../IniciarSesion.php';</script>";
			                }
		   
		    else{
		    	 echo "Error: " . $sql . "<br>" . $con->error;
		    }
		    $con->close();
		}
	
}