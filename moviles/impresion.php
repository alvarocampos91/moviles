<?php
require('/storage/ssd5/114/4829114/public_html/fpdf17/fpdf.php');

class PDF extends FPDF
{

function LoadData($file)
{
	// Leer las líneas del fichero
	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}

// Cabecera de página
function Header()
{
	global $title;
	// Logo
	$this->Image('images.jpg',10,5,190);

	$this->Ln(40);
	// Arial bold 15
	$this->SetFont('Arial','B',12);
	// Movernos a la derecha
	
	$this->Ln(20);
	$this->Ln(20);

	
}



// Tabla simple
function BasicTable($header, $data)
{
	// Cabecera
	foreach($header as $col)
		$this->Cell(66,7,$col,1);
	$this->Ln();
	// Datos
	foreach($data as $row)
	{
		foreach($row as $col)
			$this->Cell(66,6,$col,1);
		$this->Ln();
	}
}



function BasicTable2($header2, $data2)
{
	// Cabecera
	foreach($header2 as $col)
		$this->Cell(40,7,$col,1);
	$this->Ln();
	// Datos
	foreach($data2 as $row)
	{
		foreach($row as $col)
			$this->Cell(40,6,$col,1);
		$this->Ln();
	}
}


// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Número de página
	$this->Cell(0,10,'Página '.$this->PageNo(),0,0,'C');
}
}



// Creación del objeto de la clase heredada
$pdf = new PDF();
$title = 'Factura Electronica';

$header2 = array('Nombre', 'Calle', 'colonia', 'estado', 'nrc');
$header = array('Direccion', 'Tipo', 'Precio (MXN)');
// Carga de datos
$data = $pdf->LoadData('archivo.txt');
$data2 = $pdf->LoadData('archivo2.txt');


$pdf->AddPage();
$pdf->BasicTable2($header2,$data2);
$pdf->AddPage();
$pdf->BasicTable($header,$data);
$pdf->SetTitle($title);
$pdf->AliasNbPages();

$pdf->Output();
?>
