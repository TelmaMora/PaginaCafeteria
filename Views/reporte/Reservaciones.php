<?php
require_once('fpdf/fpdf.php');
$conexion=mysql_connect("localhost","root","root");
$query="SELECT * FROM reservas";
$db=mysql_select_db("cafeteria",$conexion);
$ejecuta=mysql_query($query);
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",14);
while($res=mysql_fetch_assoc($ejecuta)){
    $pdf->Cell(0,5,"NUMERO DE RESERVACION: ".$res['idreserva'],0,1);
    $pdf->Cell(0,5,"NOMBRE DE CLIENTE: ".$res['nombrecliente'],0,1);
    $pdf->Cell(0,5,"CANTIDAD DE PERSONAS: ".$res['cantidadpersonas'],0,1);
    $pdf->Cell(0,5,"TELEFONO DE CONTACTO: ".$res['telefono'],0,1);
    $pdf->Cell(0,5,"FECHA: ".$res['diallegada'],0,1);
    $pdf->Cell(0,5,"HORA: ".$res['horallegada'],0,1);
    $pdf->Cell(0,5,"OBSERVACIONES: ".$res['observaciones'],0,1);
    $pdf->Ln();
}
 $pdf->Output(); 

?>