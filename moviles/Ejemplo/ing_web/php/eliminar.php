<?php
	include 'conexion.php';	
	if(isset($_POST["actualizar"])){
		if($_POST['casilla']==null){
			print "<script>alert(\"No seleccionaste ninguna oferta.\");window.location='../perfilEmpresa.php';</script>";
		}else{
			$x=$_POST['casilla'];
			foreach ($x as $value){
				$sql1="UPDATE vacante SET vigente=0 where id_Vacante=".$value."";
				$res=$query = $con->query($sql1); 
				if($res){
					print "<script>alert(\"Oferta Actualizada.\");window.location='../perfilEmpresa.php';</script>";
				}
			}
		}
		
	}
	
?>
