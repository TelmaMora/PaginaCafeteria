<?php 

require_once 'Model/conexion.php';

	if (isset($_POST['submit'])) {
		$buscar = $_POST['buscar'];
		$buscar= date("Y-m-d", strtotime($buscar));
	   // echo "$buscar";
	 $diallegada=$buscar;
	 $nombrecliente=$buscar;
	 $conexion=mysql_connect("localhost","root","root");
	 $db=mysql_select_db("cafeteria",$conexion);
	   $ejecuta=mysql_query("SELECT * FROM reservas WHERE diallegada LIKE '".$diallegada."'OR nombrecliente LIKE '".$nombrecliente."'");
	   $resultado=mysql_fetch_array($ejecuta);
	if (empty($resultado)) {
		$titulo = 'No se encontraron Reservas El día  : '  .date("d-m-Y", strtotime($buscar));
		echo "<br><br><br><br>";
	} else {
		$titulo = 'La Reserva Buscada del Día : '  .date("d-m-Y", strtotime($buscar));
	}
	
}

 ?>

<div class="container">
<br>
<ol class="breadcrumb">
	<h1><li class="breadcrumb-item active"> <?php echo $titulo ;?></li></h1><a href="reservas"><i class="fa fa-undo" aria-hidden="true"> Volver Reservas</a></i>
</ol>	

<table class="table table-bordered">
<thead class="thead">
	<th>Nombre Cliente</th>
	<th>Cantidad Comensales</th>
	<th>Teléfono</th>
	<th>Dia Reserva</th>
	<th>Hora Arrivo</th>
	<th>Observaciones</th>
	<th>Editar O  Borrar</th>
</thead>
<?php
 $ejecuta=mysql_query("SELECT * FROM reservas WHERE diallegada LIKE '".$diallegada."'OR nombrecliente LIKE '".$nombrecliente."'");
while ($res=mysql_fetch_assoc($ejecuta)) { 
echo '<tbody><tr>			
					<td align="center"> '.$res["nombrecliente"].'</a></td>
					<td align="center"> '.$res["cantidadpersonas"].'</td>
					<td align="center">'.$res["telefono"].'</td> 
				  <td align="center">'.date("d-m-Y", strtotime($res["diallegada"])).'</td>
					<td align="center">'.$res["horallegada"].'</td>
					<td align="center">'.$res["observaciones"].'</td>		
					<td align="center"><a href="index.php?action=editarReservas&idreserva='.$res["idreserva"].'"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;&nbsp;
					    <a href="index.php?action=reservas&idBorrar='.$res["idreserva"].'"<i class="fa fa-trash-o btn btn-danger btn-sm"></i></a>
					</td>
				    </tr></tbody>';
 } ?>
</table>
<br>
<br>
<br>
</div>

