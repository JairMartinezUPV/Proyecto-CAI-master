<?php
    require './fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
            $this->Image('./assets/img/LogoUPV.png', 20, 6, 30 );
			$this->SetFont('Arial','B',20);
			$this->Cell(50);
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