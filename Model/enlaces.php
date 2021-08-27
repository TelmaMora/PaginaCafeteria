<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){
		// =============================================================
		// enlacesde ventas
		// =============================================================

		if(  $enlaces == "principalVentas"  || $enlaces=='buscar'){

			$module =  "Views/modules/ventas/".$enlaces.".php";
		
		}

		else if($enlaces == "mesa1"){

			$module =  "Views/modules/ventas/principalVentas.php";
		}
        else if($enlaces == "mesa2"){

			$module =  "Views/modules/ventas/principalVentas.php";
		
		}
		  else if($enlaces == "mesa3"){

			$module =  "Views/modules/ventas/principalVentas.php";
		
		}
		  else if($enlaces == "mesa4"){

			$module =  "Views/modules/ventas/principalVentas.php";
		
		}
		  else if($enlaces == "mesa5"){

			$module =  "Views/modules/ventas/principalVentas.php";
		
		}
		  else if($enlaces == "mesa6"){

			$module =  "Views/modules/ventas/principalVentas.php";
		
		}
		  else if($enlaces == "mesa7"){

			$module =  "Views/modules/ventas/principalVentas.php";
		
		}
		  else if($enlaces == "mesa8"){

			$module =  "Views/modules/ventas/principalVentas.php";
		
		}
		  else if($enlaces == "mesa9"){

			$module =  "Views/modules/ventas/principalVentas.php";
		
		}
		  else if($enlaces == "mesa10"){

			$module =  "Views/modules/ventas/principalVentas.php";
		
		}

		 else if($enlaces == "ventasDiarias"){

			$module =  "Views/modules/ventas/ventasDiarias/ventasDiarias.php";
		
		}

		 else if($enlaces == "imprimir"){

			$module =  "Views/modules/ventas/imprimir.php";
		
		}






	 // =============================================================
    // enlaces del las login
   // =====================================================

		
		else if($enlaces == "ingresar"){

			$module =  "Views/login/login.php";
		
		}
  

    // =============================================================
    // enlaces del las reservas
   // =====================================================

		else if($enlaces == "reservas" || $enlaces == "index" ){

			$module =  "Views/reservas/reservas.php";
		
		}

		else if($enlaces == "okReservas" ){

			$module =  "Views/reservas/reservas.php";
		
		}


		else if($enlaces == "borrarReservas" ){

			$module =  "Views/reservas/reservas.php";
		
		}

		else if($enlaces == "buscarReservas" ){

			$module =  "Views/reservas/buscarReservas.php";
		
		}

		else if($enlaces == "editarReservas" ){

			$module =  "Views/reservas/editarReservas.php";
		
		}
     
       else if($enlaces == "cambioReservas" ){

			$module =  "Views/reservas/Reservas.php";
		
		}


		

	


    // =============================================================
    // enlaces del las usuario
   // =====================================================

		else if($enlaces == "salir"){

			$module =  "Views/modules/usuarios/salir.php";
		
		}

		else if($enlaces == "usuarios"){

			$module =  "Views/modules/usuarios/usuarios.php";
		
		}

		else if($enlaces == "okUsuario"){

			$module =  "Views/modules/usuarios/usuarios.php";
		
		}

		else if($enlaces == "okBorrado"){

			$module =  "Views/modules/usuarios/usuarios.php";
		
		}

			else if($enlaces == "editarUsuarios"){

			$module =  "Views/modules/usuarios/editarUsuarios.php";
		
		}

			else if($enlaces == "okEdiatdoUsuarios"){

			$module =  "Views/modules/usuarios/usuarios.php";
		
		}



    // =============================================================
    // enlaces del los Productos
   // =====================================================

		else if($enlaces == "listadoProd"){

			$module =  "Views/modules/productos/listadoProd.php";
		
		}

       else if($enlaces == "okProductos"){

			$module =  "Views/modules/productos/listadoProd.php";
		
		}


       else if($enlaces == "borrarProductos"){

			$module =  "Views/modules/productos/listadoProd.php";
		
		}

       else if($enlaces == "editarProductos"){

			$module =  "Views/modules/productos/editarProductos.php";
		
		}
		else if($enlaces == "okEditar"){
			$module =  "Views/modules/productos/listadoProd.php";
		}
		




    // =============================================================
    // enlaces del las CATEGORIAS
   // =====================================================

		else if($enlaces == "categorias"){

			$module =  "Views/modules/categorias/categorias.php";
		
		}

		else if($enlaces == "okCategorias"){

			$module =  "Views/modules/categorias/categorias.php";
		
		}


		else if($enlaces == "borrarCat"){

			$module =  "Views/modules/categorias/borrarCategorias.php";
		
		}

		else if($enlaces == "editarcategoria"){

			$module =  "Views/modules/categorias/editarCategorias.php";
		
		}
		else if($enlaces == "okEdit"){

			$module =  "Views/modules/categorias/categorias.php";
		
		}
		
		else if($enlaces == "borrarCategorias"){

			$module =  "Views/modules/categorias/categorias.php";
		
		}
		

 


		else{

			$module =  "Views/reservas/reservas.php";

		}
		
		return $module;

	}
	#--------------------------------------------------------
	#enlaces de la aplicacion 
    
    

}










 ?>