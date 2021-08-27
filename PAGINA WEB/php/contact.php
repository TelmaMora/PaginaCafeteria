<?php
$conexion=mysql_connect("localhost","root","root");
$db=mysql_select_db("cafeteria",$conexion);

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$ms=mysql_query("INSERT INTO comentarios(idComentario,nombre,email,asunto,comentario) VALUES (null,'$nombre','$email','$asunto','$mensaje')");
$res2=mysql_affected_rows();
echo $res2;
            if ($res2) {
              echo 'success';
            }else{
                echo 'error';
            }


?>