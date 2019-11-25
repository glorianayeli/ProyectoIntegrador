<?php
require('fpdf/fpdf.php');

$pdf=new FPDF();
$pdf->AddPage();

    $pdf->Image('assets/img/rfhealth.jpg',10,8,33);
    // Arial bold 15
    $pdf->SetFont('Arial','B',18);
    // Movernos a la derecha
    $pdf->Cell(80);
    // Título
    $pdf->Cell(35,30,'RF Health',0,0,'C');
    // Salto de línea
    $pdf->Ln(40);
   

    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10, utf8_decode('Historial de datos'));
    $pdf->Ln(20);

    $pdf->Cell(80, 10, 'Tiempo', 1, 0, 'C',0);
    $pdf->Cell(50, 10, 'Temperatura', 1, 0, 'C',0);
    $pdf->Cell(50, 10, 'Humedad', 1, 0, 'C',0);
    $pdf->Ln();
    foreach ($data as $d) {
        $pdf->Cell(80, 10, $d['Fecha'], 1, 0, 'C',0);
        $pdf->Cell(50, 10, $d['Temperatura'], 1, 0, 'C',0);
        $pdf->Cell(50, 10, $d['Humedad'], 1, 0, 'C',0);  
        $pdf->Ln();
}

$pdf->Output();
?>