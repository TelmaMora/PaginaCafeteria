<<?php 
$conexion=mysql_connect("localhost","root","root");
$db=mysql_select_db("cafeteria",$conexion);
	$sql="SELECT COUNT( * ) AS cant, diallegada FROM reservas WHERE MONTH(diallegada)>=MONTH(DATE_SUB(CURDATE( ), INTERVAL 1 MONTH)) GROUP BY diallegada";
  
  $result=mysql_query($sql);
  $valoresX=array();
  $valoresY=array();
    
    while ($ver=mysql_fetch_row($result)) {
    	$valoresX[]=$ver[0];
    	$valoresY[]=$ver[1];
    }
    $datosX=json_encode($valoresX);
      $datosY=json_encode($valoresY);
       ?>
<div id="graficaPie"></div>
<script type="text/javascript">
	function crearCadenaLineal(json) {
		var parsed=JSON.parse(json);
		var arr=[];
		for (var x in parsed) {
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>



<script type="text/javascript">
	datosX=crearCadenaLineal('<?php echo $datosX ?>');
	datosY=crearCadenaLineal('<?php echo $datosY ?>');
	var data = [{
  values: datosY,
  labels: datosX,
  type: 'pie'
}];

var layout = {
  height: 400,
  width: 500
};

Plotly.newPlot('graficaPie', data, layout);
</script>