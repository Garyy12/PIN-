<?php
	require '../fpdf/fpdf.php';
	
	class administradores extends FPDF
	{
		function Header()
		{
			//$this->Image('images/logo.png', 5, 5, 30 );//
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Lista de Administradores',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}

    class usuarios extends FPDF
	{
		function Header()
		{
			//$this->Image('images/logo.png', 5, 5, 30 );//
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Lista de usuarios',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}

    class afiliados extends FPDF
	{
		function Header()
		{
			//$this->Image('images/logo.png', 5, 5, 30 );//
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Lista de afiliados',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>