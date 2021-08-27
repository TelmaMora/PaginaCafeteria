<?php session_start();

if (!isset($_SESSION['nombreusuario'])) {
	header('location:Views/login/login.php');
}else{

	require_once 'Model/enlaces.php';
	require_once 'Model/reservasModel/reservasModel.php';
	require_once 'Model/usuariosModel/usuariosModel.php';




	require_once 'Controller/reservasController/reservasController.php';
	require_once 'Controller/usuariosController/usuariosController.php';

	$index = new MvcController();
	$index->plantilla();
}

