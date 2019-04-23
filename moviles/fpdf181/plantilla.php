﻿<?php
	require '/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('images.jpg', 5, 5, 30 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Inmuebles Online',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10,'Página '.$this->PageNo(),0,0,'C');
		}		
	}
?>