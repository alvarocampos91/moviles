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
			$sql = "insert into usuario(name,email,curp,calle,colonia,estado,pais,telefono,login,password) values ('$name','$email','$curp','$calle','$colonia','$estado','$pais','$telefono','$login','$password')";

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


include_once 'lib/nusoap.php';
$servicio = new soap_server();

$ns = "urn:miserviciowsdl";
$servicio->configureWSDL("MiPrimerServicioWeb",$ns);
$servicio->schemaTargetNamespace = $ns;

$servicio->register("MiFuncion", array('palabra' => 'xsd:string'), array('return' => 'xsd:string'), $ns );

function MiFuncion($palabra){

 $palabraVerificar = $palabra;
 	if($palabraVerificar == 'Luis'){
 		$resultado = " " . $palabra . " -  Emisor Correcto";	
 		return $resultado;
 	}elseif($palabraVerificar == 'abuelo'){
 		$resultado = " " . $palabra . " -  Papa’, tatita’";	
 		return $resultado;
 	}elseif($palabraVerificar == 'agua'){
 		$resultado = " " . $palabra . " -  Chuchut (ch’úchut). Akgachuchut: Caldo. Akgchuchútstapu: Caldo de frijol.";	
 		return $resultado;
 	}elseif($palabraVerificar == 'craneo'){
 		$resultado = " " . $palabra . " -  Aklukut s. Cráneo, calavera. Lukut, hueso.";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'guayaba') {
 		$resultado = " " . $palabra . " -  Asiwit";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'arete') {
 		$resultado = " " . $palabra . " - Takganu";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'calle') {
 		$resultado = " " . $palabra . " - Xulalh";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'carne') {
 		$resultado = " " . $palabra . " - Liwa";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'caña') {
 		$resultado = " " . $palabra ."de azúcar - Chankat, ".$palabra ." de puerco - Xchankat paxni.";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'cerro') {
 		$resultado = " " . $palabra . " - Sipij";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'colibri') {
 		$resultado = " " . $palabra . " - Jun (hún)";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'chicle') {
 		$resultado = " " . $palabra . " - Tsakgat";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'diabetes') {
 		$resultado = " " . $palabra . " - Saqsíkgalhni";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'cerro') {
 		$resultado = " " . $palabra . " - Sipij";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'diente') {
 		$resultado = " " . $palabra . " - Tatsán";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'encia') {
 		$resultado = " " . $palabra . " - Kgalhkgewi";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'ejote') {
 		$resultado = " " . $palabra . " - Xtokge";	
 		return $resultado;
 	}elseif ($palabraVerificar == 'flor') {
 		$resultado = " " . $palabra . " - Xanat";	
 		return $resultado;
 	}else{
 		$resultado = "Palabra no encontrada";	
 		return $resultado;
 	}
 
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$servicio->service($HTTP_RAW_POST_DATA);
