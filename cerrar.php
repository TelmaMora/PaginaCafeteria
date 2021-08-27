<?php 
session_start();
unset($_SESSION["nombreusuario"]);
if(!isset($SESSION['nombreusuario'])){
header("Location: ./Views/login/login.php");
close;
}