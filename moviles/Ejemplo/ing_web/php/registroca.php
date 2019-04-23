<?php


if(!empty($_POST)){


			include "conexion.php";
			$nombreca=$_POST['nombreca'];
			$email=$_POST['emailc'];
			$telefonoc=$_POST['telefonoc'];
			$loginc=$_POST['loginc'];
			$passc=$_POST['passc'];
			
			$found=false;
			$sql1= "select * from candidato where loggin_Candidato='$loginc' or direccion_Candidato='$email'";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registroCandidato.php';</script>";
			}
			else{
			$sql = "insert into candidato(nombre_Candidato,direccion_Candidato,tel_Candidato,loggin_Candidato,password_Candidato) values ('$nombreca','$email','$telefonoc', '$loginc','$passc')";

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