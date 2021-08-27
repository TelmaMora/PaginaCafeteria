<?php
require_once('phplot.php');
$conexion=mysql_connect("localhost","root","root");
$db=mysql_select_db("cafeteria",$conexion);
$ejecuta=mysql_query("SELECT COUNT( * ) AS cant, diallegada FROM reservas WHERE MONTH(diallegada)>=MONTH(DATE_SUB(CURDATE( ), INTERVAL 1 MONTH)) GROUP BY diallegada");
$data=mysql_fetch_array($ejecuta);
echo($data);
    $p = new PHPlot(800,400);
    $p->SetTitle("RESERVACIONES EN EL ULTIMO MES");
    $p->SetDataType('text-data');
    $p->SetDataValues($data);
    $p->SetPlotType(bars);
    $p->SetPlotAreaWorld(0,0,10,100);
    $p->SetBackgroundColor('#AAAACC');
    $p->SetDrawPlotAreaBackground(True);
    $p->SetPlotBgColor('#FFFFF0');

    $p->SetLegend(array('RESERVACIONES POR DIA','FECHA'));
    $p->SetLegendWorld(0.1,95);

    $p->SetXDataLabelPos('plotdown');
    $p->SetXTickPos('plotup');
    $p->SetXTickLabelPos('both');
    $p->SetYTickPos('both');
    $p->SetYTickLabelPos('none');

    $p->DrawGraph();


    //linea,barra,pastel,area