<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
}

if(!empty($_POST)){

			
			include "conexion.php";
			$id=$_SESSION["user_id"];
			$nombreP=$_POST['nomPuesto'];
			$descripcion=$_POST['desPuesto'];
			$rango=$_POST['rango'];
			$jornada=$_POST['jornada'];
			$requisito=$_POST['requisito'];
			
			
			$found=false;
			$sql1= "select * from vacante where nombre_Vacante='$nombreP'";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de vacante ya registrada.\");window.location='../registroOfertaL.php';</script>";
			}
			else{
			$sql = "insert into vacante(nombre_Vacante,descripcion_Vacante,rango_Salarial,jornada,requisitos_Vacante,id_Empresa) values ('$nombreP','$descripcion','$rango', '$jornada','$requisito','$id')";

			$query = $con->query($sql);
			if($query === TRUE){
				print "<script>alert(\"Registro exitoso.\");window.location='../perfilEmpresa.php';</script>";
			                }
		   
		    else{
		    	 echo "Error: " . $sql . "<br>" . $con->error;
		    }
		    $con->close();
		}
	
}



?>