<?php
	include 'plantilla.php';
	$host="localhost";
	$user="root";
	$password="";
	$db="inmuebles";
	$con = new mysqli($host,$user,$password,$db);
	
	$sql1= "select * from casas";
  	$query = $con->query($sql1);
	
	$idCasa=$row['id_casa'];
    $direccionC=$row['direccion_c'];
    $cuartosC=$row['no_cuartos_c'];
    $pisosC=$row['no_pisos_c'];
    $precioC=$row['precio_c'];
    $tipoC=$row['tipo'];



	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'ID',1,0,'C',1);
	$pdf->Cell(70,6,'Direccion',1,0,'C',1);
	$pdf->Cell(50,6,'tipo',1,0,'C',1);
	$pdf->Cell(20,6,'No.Cuartos',1,1,'C',1);
	$pdf->Cell(20,6,'No.Pisos',1,1,'C',1);
	$pdf->Cell(20,6,'Precio',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $query->fetch_array())
	{
		$pdf->Cell(20,6,$row['idCasa'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['direcionC']),1,1,'C');
		$pdf->Cell(50,6,utf8_decode($row['tipoC']),1,1,'C');
		$pdf->Cell(20,6,$row['cuartosC'],1,0,'C');
		$pdf->Cell(20,6,$row['pisosC'],1,0,'C');
		$pdf->Cell(20,6,$row['precioC'],1,0,'C');
		
	}
	$pdf->Output();
?>