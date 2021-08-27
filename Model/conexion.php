<?php 

	class Conexion{
		public function conectar(){
			try {
				$conexion=mysql_connect("localhost","root","root");
				$db=mysql_select_db("restaurant",$conexion);
				return $conexion;
			} catch (Exception $e) {
				echo "ERROR DE CONEXION". $e->getMessage. $e->getLine;
			}
		}

		
	}
	?>
