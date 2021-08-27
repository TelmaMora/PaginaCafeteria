<?php 
require_once "../php/conexion.php";
	$conexion=conexion(); 

	$sql="SELECT nom_equi , SUM( ganados *3 + empatados ) as points
FROM general g
JOIN equipo e ON g.cve_equi = e.cve_equi
GROUP BY g.cve_equi order by points desc";
  
  $result=mysqli_query($conexion,$sql);
  $valoresX=array();
  $valoresY=array();
    
    while ($ver=mysqli_fetch_row($result)) {
    	$valoresX[]=$ver[0];
    	$valoresY[]=$ver[1];
    }
    $datosX=json_encode($valoresX);
      $datosY=json_encode($valoresY);

?>
<div id="graficaLineal"></div>
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
	var trace1 = {
		x: datosX,
		y: datosY,
		type: 'scatter'
	};


	var data = [trace1];

	Plotly.newPlot('graficaLineal', data);
</script>