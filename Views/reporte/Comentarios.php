<?php
require_once('fpdf/fpdf.php');
$conexion=mysql_connect("localhost","root","root");
$query="SELECT * FROM comentarios";
$db=mysql_select_db("cafeteria",$conexion);
$ejecuta=mysql_query($query);
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",14);
while($res=mysql_fetch_assoc($ejecuta)){
    $pdf->Cell(0,5,"NUMERO DE COMENTARIO: ".$res['idComentario'],0,1);
    $pdf->Cell(0,5,"NOMBRE DE CLIENTE: ".$res['nombre'],0,1);
    $pdf->Cell(0,5,"EMAIL: ".$res['email'],0,1);
    $pdf->Cell(0,5,"ASUNTO: ".$res['asunto'],0,1);
    $pdf->Cell(0,5,"COMENTARIO: ".$res['comentario'],0,1);

    $pdf->Ln();
}
 $pdf->Output(); 

?>