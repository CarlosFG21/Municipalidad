<?php
require('../pdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
{
    
    $this->Image('municipalidadg.jpg',10,15,34);
    $this->SetFont('Arial','B',25);
    $this->SetTextColor(66, 131, 245);
    $this->Cell(120,16,utf8_decode('"Municipalidad de'),0,0,'R',0);
    $this->SetTextColor(245, 0, 0);
    $this->Cell(35,16,utf8_decode('Gualán"'),0,0,'C');
    
    $this->Ln(2);
    $this->SetFont('Arial','B',12);
    $this->SetTextColor(66, 131, 245);
    $this->Cell(198,28,utf8_decode('Gobernar, es servir'),0,0,'C');

    $this->Ln(18);
    $this->SetFont('Arial','B',12);
    $this->SetTextColor(0, 0, 0);
    //$this->Cell(198,18,'Reporte de Personal',0,0,'C');

    $this->SetX(50);
    $this->SetFillColor(215, 220, 224);
    $this->Cell(116,1,'',0,1,'C',1);
    //$this->Ln(18);
    $this->Ln(8);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}