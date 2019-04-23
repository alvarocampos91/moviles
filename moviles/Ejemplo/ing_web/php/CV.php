<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
}
$insertar=$_POST['insertar'];
if(isset($insertar)){			
			include "conexion.php";
			$id=$_SESSION["user_id"];
			$nombreCV=$_POST['name'];
			$correo=$_POST['correo'];
			$telefono=$_POST['telefono'];
			$fecha=$_POST['date'];
			$edad=$_POST['edad'];
			$sexo=$_POST['sexo'];
			$civil=$_POST['civil'];
			$direccion=$_POST['direccion'];
			$retribucion=$_POST['retribucion'];
			$jornada=$_POST['jornada'];
			$estudio=$_POST['estudio'];
			$extras=$_POST['extras'];
			
			echo $_FILES['foto']['type'];
			echo "<br>";
			if($_FILES["foto"]["error"]>0){
				echo "Error al subir la foto";

			}else{

			}

			if ($_FILES['foto']['type'] != "image/jpeg" && $_FILES['foto']['type'] != "image/png"){
				print "<script>alert(\"No se pudo Realizar el registro.\");window.location='../Curriculum.php';</script>";            	
			}else{
				$ruta="../fotos/".$_FILES['foto']['name'];
				echo $ruta;
				if (!file_exists($ruta)){
					$resultado = @move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta);
					if ($resultado) {
						echo "<a href=\"$ruta\" >[$ruta]</a>";
					}					
				}else{
					echo "La imagen ya existia en la carpeta";
				}
				$found=false;
				$sql1= "select * from cv where nombreCV='$nombreCV'";
				$query = $con->query($sql1);
				while ($r=$query->fetch_array()) {
					$found=true;
					break;
				}
				if($found){
					print "<script>alert(\"Ya haz enviado este cv.\");window.location='../Curriculum.php';</script>";
				}
				else{
				$sql = "insert into cv(nombreCV,correo,telefono,fecha,edad,sexo,civil,dircv,retribucion_Minima,tipo_Jornada,grado_Estudios,habilidades,fotografia,id_Candidato) values ('$nombreCV','$correo','$telefono','$fecha','$edad','$sexo','$civil', '$direccion','$retribucion','$jornada','$estudio','$extras','$ruta','$id')";

				$query = $con->query($sql);
				if($query === TRUE){
					print "<script>alert(\"CV enviado.\");window.location='../perfilCandidato.php';</script>";
				}			   
			    else{
			    	echo "Error: " . $sql . "<br>" . $con->error;
			    }
			    $con->close();


			}//Fin del else del tipo de imagen
			
			
		}
	
}



?>