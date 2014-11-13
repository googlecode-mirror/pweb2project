<?php
require('../library/fpdf17/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(10,10,'¡Mi primera página pdf!');
$pdf->Cell(10,30,'¡Mi segunda linea del pdf!');
$pdf->Output();
?>