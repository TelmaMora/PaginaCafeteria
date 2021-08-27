<?php 
require_once "../php/conexion.php";
	$conexion=conexion(); 

	$sql="SELECT nom_jug, COUNT( gol.curp ) as goles FROM jugador j
              JOIN equipo e ON e.cve_equi = j.cve_equi
JOIN gol ON gol.curp = j.curp
GROUP BY gol.curp order by goles desc";
  
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
<div id="graficaBarras"></div>
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
		type: 'bar'
	};


	var data = [trace1];
	Plotly.newPlot('graficaBarras', data);
</script>