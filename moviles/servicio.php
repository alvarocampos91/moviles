<?php

include_once '/storage/ssd5/114/4829114/public_html/lib2/nusoap.php';
$servicio = new soap_server();

$ns = "urn:miserviciowsdl";
$servicio->configureWSDL("MiPrimerServicioWeb",$ns);
$servicio->schemaTargetNamespace = $ns;

$servicio->register("MiFuncion", array('nombre' => 'xsd:string','calle' => 'xsd:string','colonia' => 'xsd:string','estado' => 'xsd:string','nrc' => 'xsd:string','tipo' => 'xsd:string','direc' => 'xsd:string','precio' => 'xsd:string'), array('return' => 'xsd:string'), $ns );

function MiFuncion($nombre,$calle,$colonia,$estado,$nrc,$tipo,$direc,$precio){

 $nombreVerificar = $nombre;
 $calleVerificar = $calle;
 $coloniaVerificar = $colonia;
 $estadoVerificar = $estado;
 $nrcVerificar = $nrc;
 $tipoVerificar = $tipo;
 $direcVerificar = $direc;
 $precioVerificar = $precio;

 	if(($nombreVerificar == null) && ($calleVerificar == null) || ($coloniaVerificar == null) || ($estadoVerificar == null) || ($nrcVerificar  == null) || ($tipoVerificar == null) || ($direcVerificar == null) || ($precioVerificar == null)){
 		$resultado = "Campos incompletos";
 		return $resultado;
 	}else{
 		$resultado = "Campos completos";	
 		return $resultado;
 	}
	
 
}
 



$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$servicio->service($HTTP_RAW_POST_DATA);


?>