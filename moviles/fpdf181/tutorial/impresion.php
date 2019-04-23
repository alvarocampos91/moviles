<?php
require('../fpdf.php');

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
	$this->Image('images.png',10,8,33);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Movernos a la derecha
	$this->Cell(80);
	// Título
	$this->Cell(30,10,'Inmuebles Online',1,0,'C');
	// Salto de línea
	$this->Ln(20);
}


function ChapterTitle()
{
	// Arial 12
	$this->SetFont('Arial','',12);
	// Color de fondo
	$this->SetFillColor(200,220,255);
	// Título
	$this->Cell(0,6,"Capítulo ",0,1,'L');
	// Salto de línea
	$this->Ln(4);
}

// Tabla coloreada
function FancyTable($header, $data)
{
	// Colores, ancho de línea y fuente en negrita
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	// Cabecera
	$w = array(40, 35, 45, 40);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	// Restauración de colores y fuentes
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Datos
	$fill = false;
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
		$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
		$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
	}
	// Línea de cierre
	$this->Cell(array_sum($w),0,'','T');
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







$header = array('País', 'Capital', 'Superficie (km2)', 'Pobl. (en miles)');
// Carga de datos
$data = $pdf->LoadData('paises.txt');


$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->SetTitle($title);
$pdf->AliasNbPages();

$pdf->Output();
?>
