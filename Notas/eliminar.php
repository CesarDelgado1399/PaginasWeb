<?php
if (!isset($_GET["id"])) {
    header('location: index.php');
}

$codigo = $_GET["id"];
include "model/conexion.php";
$sentencia = $bd -> prepare("DELETE FROM alumno WHERE id_alumno = ?");
$resultado = $sentencia -> execute([$codigo]);

if($resultado === true){
    header('location: index.php');
}else{
    "Error";
}