
	<div role="main" class="ui-content">
			<form action="cliente.php" method="post">
				<div class="ui-field-contain">
					<label for="name">Palabra:</label>
					<input type="text" name="palabraform" id="palabra" value="" />
					<label for="name">Oracion:</label>
					<input type="text" name="oracionform" id="oracion" value="" />
				</div>

				<div class="ui-field-contain">
					<input type="submit" name="submit" value="Enviar" />
				</div>
				
			</form>
		</div>

<?php
	if ((isset($_POST["palabraform"])&& !empty($_POST["palabraform"])) ){

		require_once("/lib/nusoap.php");
		$wsdl="http://localhost:8080/Inmuebles/servicio/ws/servicio.php?wsdl";
		$client =new nusoap_client($wsdl,'wsdl');
		$palabra=$_POST['palabraform'];
		$oracion=$_POST['oracionform'];
		$parametros=array('palabra'=>$palabra,'oracion'=>$oracion);

		$response = $client->call('MiFuncion',$parametros);
		$file = fopen("archivo.txt", "w");
		fwrite($file, $response . PHP_EOL);
		fclose($file);
		echo"Palabra y oracion: <br>";
		echo "<pre>";
		print_r($response);
		echo"</pre>";

	}

	

?>﻿