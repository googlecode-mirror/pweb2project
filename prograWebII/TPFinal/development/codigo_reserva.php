<?php
require('../library/fpdf17/fpdf.php');
require('../library/fpdi/fpdi.php');
/*
$pdf=new FPDI();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(10,10,'¡Mi primera página pdf!');
$pdf->Output();
*/

$pdf = new FPDI();
$pdf->AddPage();
$pdf->setSourceFile('../templates/Reserva.pdf');
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx, 10, 10, 200);
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(40, 70);
$pdf->Write(0, 'ésto es un texto en el template');

$pdf->Output();
?>