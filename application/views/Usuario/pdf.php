<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{
    

// Cabecera de página
function Header()
{
    // Logo
    $this->Image('assets/img/rfhealth.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(35,30,'RF Health',0,0,'C');
    // Salto de línea
    $this->Ln(40);

    
    $this->AliasNbPages();
    $this->SetFont('Arial','B',16);
    $this->Cell(40,10, utf8_decode('Historial de datos'));
    $this->Ln(20);

    $this->Cell(60, 10, 'Tiempo', 1, 0, 'C',0);
    $this->Cell(60, 10, 'Temperatura', 1, 0, 'C',0);
    $this->Cell(70, 10, 'Humedad', 1, 0, 'C',0);
    $this->Ln();
   
    
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->Output('Historial_RFHealth.pdf', 'I');
$pdf->Output('Historial_RFHealth.pdf', 'D');


?>