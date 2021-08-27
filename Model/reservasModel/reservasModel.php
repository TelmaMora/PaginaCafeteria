<?php 

require_once 'Model/conexion.php';

 class Datos{
 
 	 	public function getReservasModel( $tabla){
         $ejecuta=mysql_query("SELECT *  FROM $tabla");
         $res=mysql_fetch_assoc($ejecuta);
         return $res;
 	 	} 

 	 public function agregarReservasModel($datosModel,$tabla){
      $nom=$datosModel['nombrecliente'];
      $cant=$datosModel['cantidadpersonas'];
      $tel=$datosModel['telefono'];
      $dia=$datosModel['diallegada'];
      $hora=$datosModel['horallegada'];
      $obs=$datosModel['observaciones'];
 	 	$consulta2=("INSERT INTO $tabla(nombrecliente,cantidadpersonas,telefono,diallegada,horallegada,observaciones)
 	 	  	VALUES('".$nom."','".$cant."','".$tel."','".$dia."','".$hora."','".$obs."')");
            $ejecuta2=mysql_query($consulta2);
            $res2=mysql_affected_rows();
            if ($res2) {
               return 'success';
            }else{
                return 'error';
            }

            $stmt->close();
 	 }	

 	 	public function deleteReservaModel($datosModel,$tabla){
         $id=$datosModel;
         $consul=("DELETE FROM reservas WHERE idreserva = '".$id."'");
         $e=mysql_query($consul);
         $r=mysql_affected_rows();
      if ($r==1) {
         return 'success';
      }else{
        return 'Error';
      }

      $stmt->close();
    }
     
     public function totalReservasModel($tabla){
         $fecha = date('Y-m-d').'<br>';
         $conexion=mysql_connect("localhost","root","root");
	 $db=mysql_select_db("cafeteria",$conexion);
         $ejecuta=mysql_query("SELECT COUNT(*) as total FROM reservas WHERE diallegada >= '$fecha' GROUP BY idreserva");
         $res=mysql_fetch_array($ejecuta, MYSQL_ASSOC);
         return $res;
      }

     public function editarReservasModel($datosModel,$tabla){
         $idreserva=$datosModel;
         $conexion=mysql_connect("localhost","root","root");
			$db=mysql_select_db("cafeteria",$conexion);
        $sql=mysql_query("SELECT * FROM $tabla WHERE idreserva = '".$idreserva."'");
        $res=mysql_fetch_array($sql, MYSQL_ASSOC);
        return $res;
     } 

         function actualizarReservasModel($datosModel,$tabla){
            $nom=$datosModel['nombrecliente'];
$cant=$datosModel['cantidadpersonas'];
$tel=$datosModel['telefono'];
$dia=$datosModel['diallegada'];
$hora=$datosModel['horallegada'];
$obs=$datosModel['observaciones'];
$id=$datosModel['idreserva'];
      $con=("UPDATE $tabla SET nombrecliente = '".$nom."',cantidadpersonas = '".$cant."', telefono='".$tel."',diallegada='".$dia."',horallegada='".$hora."',observaciones='".$obs."' WHERE idreserva = '".$id."'");
$eje=mysql_query($con);

           
      if($re=mysql_affected_rows()){

             return "success";
      }else{
    
       return  "error";
      }

      $sql->close();
    }

 }
 ?>