<?php
require_once("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(40,10,"Hola Mundos");
$pdf->Cell(40,10,"Instituto Tecnologico de Zitacuaro");
$pdf->Cell(40,10,"Telma Yarytzy Mora Bernal");
$pdf->Cell(40,10,"Diseño Web");
$pdf->Output(); 
?>