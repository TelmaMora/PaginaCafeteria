<?php  

 	// ob_start();

 class UsuariosController{

 	public function getUsuariosController(){

 		$respuesta = UsuariosModel::getUsuariosModel('usuarios');
 		foreach ($respuesta as $row) {
 		echo '<tr> 
              <td align="center"> '.$row['nombreusuario'].'</td>
              <td align="center"> '.date("d-m-Y", strtotime($row['fechacreado'])).'</td>
			 <td align="center"><a href="index.php?action=editarUsuarios&idusuario='.$row["idusuario"].'"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="index.php?action=usuarios&idBorrar='.$row["idusuario"].'"<i class="fa fa-trash-o btn btn-danger btn-sm"></i></a>
					</td>
 		      </tr>';
 		}
 	}

 	public function ingresarUsuariocontroller(){
 		if (isset($_POST['guardarUsuario'])) {
 			$datosController = array('nombreusuario'=>$_POST['nombreusuario'],
 				                      'password'=>$_POST['password']
 				                       );

 				#pedir la informacion al modelo.
 			$respuesta = UsuariosModel::ingresarUsuariosModel($datosController , 'usuarios');

 			if ($respuesta == 'success') {
 				header('location:okUsuario');
 			}else{
 				header('location:reservas');
 				
 		}
 			}
 	}


 	//borrar Usuario
   public function deleteUsuariosController(){
   	 if (isset($_GET['idBorrar'])) {
   	 	$datosController = $_GET['idBorrar'];

   	 	$respuesta = UsuariosModel::deleteUsuariosModel($datosController, 'usuarios');
   	 	if ($respuesta == 'success') {
         header('location:okBorrado'); 
   	 	}
   	 }

   }

   public function editarUsuariosController(){
      if (isset($_POST['editarUsuario'])) {
       $datosController = array('nombreusuario' => $_POST['nombreusuario'],
                                 'password'     => $_POST['password'],
                                 'idusuario'    => $_POST['idusuario']);

       $respuesta = UsuariosModel::editarUsuariosModel($datosController , 'usuarios');

          if ($respuesta == 'success') {
         header('location:okEdiatdoUsuarios');
          
      }
     }



   }

 	
 }