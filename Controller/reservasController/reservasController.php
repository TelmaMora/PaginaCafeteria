<?php  
ob_start();

class MvcController {

   public function plantilla(){
   	     include 'Views/template.php';
   }

	public function enlacesPaginasController(){

		if(isset($_GET["action"])){

		  $enlacesController = $_GET["action"];

		}else{

		   $enlacesController = "index";
			
		}
		 $respuesta = Paginas::enlacesPaginasModel($enlacesController);
		 require $respuesta;

	}

	 	public function getReservasController(){
			 $hoy = date('Y-m-d');
			$ejecuta=mysql_query("SELECT *  FROM reservas");
			$res=mysql_fetch_assoc($ejecuta);
			while ($res=mysql_fetch_assoc($ejecuta)) {
	 			echo '<tr>			
					<td align="center"> '.$res["nombrecliente"].'</a></td>
					<td align="center"> '.$res["cantidadpersonas"].'</td>
					<td align="center">'.$res["telefono"].'</td> 
				  <td align="center">'.date("d-m-Y", strtotime($res["diallegada"])).'</td>
					<td align="center">'.$res["horallegada"].'</td>
					<td align="center">'.$res["observaciones"].'</td>		
					<td align="center"><a href="index.php?action=editarReservas&idreserva='.$res["idreserva"].'"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;&nbsp;
					    <a href="index.php?action=reservas&idBorrar='.$res["idreserva"].'"<i class="fa fa-trash-o btn btn-danger btn-sm"></i></a>
					</td>
				    </tr>';
 		}
 		}
 	public function agregarReservaController(){
         	if(isset($_POST['agregar'])) {
 			$datosController = array("nombrecliente"=>$_POST['nombrecliente'],
 				                     "cantidadpersonas"=>$_POST['cantidadpersonas'],
 				                      "telefono"=>$_POST['telefono'],
 				                      "diallegada"=>$_POST['diallegada'],	              
 				                      "horallegada"=>$_POST['horallegada'],	              
 				                      "observaciones"=>$_POST['observaciones']
 				                                  
 				                     );
 		
 		$respuesta= Datos::agregarReservasModel($datosController,'reservas');
 			if ($respuesta == 'success') {
 				console.log("INSERTADO CON EXITO");
 			}else{
                console.log("ERROR");
 			}
 		}
 	}

   public function deleteReservasController(){
   	 if (isset($_GET['idBorrar'])) {
			$datosController = $_GET['idBorrar'];
			$respuesta = Datos::deleteReservaModel($datosController,'reservas');
   	 	if ($respuesta == 'success') {
			echo '<script> location.href="index.php"; </script>';
   	 	}
   	 }
   }
   public function totalReservasController(){
   	  $respuesta = Datos::totalReservasModel('reservas');
   	 	foreach ($respuesta as $key ) {
 			 echo $key['total'];
 		} 
   }

     public function editarReservasController(){
      	$datosController= $_GET['idreserva'];
	    $respuesta =Datos::editarReservasModel($datosController, 'reservas');

	    echo ' <form method="post">
          <div class="row">
            <div class="col-md-6">  
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre Cliente:</label>
                <input type="text" class="form-control" id="recipient-name" name="nombrecliente" value="'.$respuesta['nombrecliente'].'">
              </div>
            </div>
               <div class="col-md-6">  
             <div class="form-group">
              <label for="recipient-name" class="form-control-label">Cantidad de Personas:</label>
              <input type="text" class="form-control" id="recipient-name" name="cantidadpersonas" value="'.$respuesta['cantidadpersonas'].'">
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6"> 
             <div class="form-group">
              <label for="recipient-name" class="form-control-label">Telefono de Contacto:</label>
              <input type="text" class="form-control" id="recipient-name" name="telefono"  value="'.$respuesta['telefono'].'">
            </div>
            </div>
            <div class="col-md-6"> 
             <div class="form-group">
              <label for="recipient-name" class="form-control-label">Fecha Reserva (1/10/2017):</label>
              <input type="text" id="datepicker" class="form-control" id="recipient-name" name="diallegada" value="'.$respuesta['diallegada'].'">
            </div>
            </div>
            </div>
             <div class="row">
                <div class="col-md-6"> 
             <div class="form-group">
              <label for="recipient-name" class="form-control-label">Hora de Reserva (22:00):</label>
              <input type="text" class="form-control" id="recipient-name" name="horallegada" value="'.$respuesta['horallegada'].'">
            </div>
            </div>
              <div class="col-md-6"> 
              <div class="form-group">
              <label for="message-text" class="form-control-label">Observaciones:</label>
              <textarea class="form-control" id="message-text" name="observaciones" required="">'.$respuesta['observaciones'].'</textarea>
            </div>
            </div>
        </div>
        </div>
        <input type="hidden" name="idreserva" value="'.$respuesta['idreserva'].'">
          <button type="submit" class="btn btn-primary form-control" name="editar">Agregar Reserva</button>
          </form>';
     
    }

    public function actualizarReservasController(){
    	if (isset($_POST['editar'])) {
    		$datosController=array('nombrecliente'=>$_POST['nombrecliente'],
    			                   'cantidadpersonas'=>$_POST['cantidadpersonas'],
    			                   'telefono'=>$_POST['telefono'],
    			                   'diallegada'=>date("Y-m-d", strtotime($_POST['diallegada'])),
    			                   'horallegada'=>$_POST['horallegada'],
    			                   'observaciones'=>$_POST['observaciones'],
    			                   'idreserva'=>$_POST['idreserva']
    			);
    	$respuesta=Datos::actualizarReservasModel($datosController,'reservas');	
    	  	if ($respuesta == 'success') {
				echo '<script> location.href="index.php"; </script>';
      		}
    	}
    }

}
