<?php
if (!isset($_POST["Oculto"])) {
    header('location: index.php');
}

include "model/conexion.php";
$id2 = $_POST["id2"];
$paterno2 = $_POST["txt2Paterno"];
$materno2 = $_POST["txt2Materno"];
$nombre2 = $_POST["txt2Nombre"];
$edad2 = $_POST["txt2Edad"];
$sexo2 = $_POST["txt2Sexo"];
$parcial2 = $_POST["txt2Parcial"];
$final2 = $_POST["txt2Final"];

$sentencia = $bd->prepare("UPDATE alumno SET ap_paterno = ?,ap_materno = ?, nombre = ?, edad = ?, sexo = ?, ex_parcial = ?, ex_final = ? WHERE id_alumno = ?");
$resultado = $sentencia->execute([$paterno2,$materno2,$nombre2,$edad2,$sexo2,$parcial2,$final2,$id2]);

if($resultado === true){
    header("location: index.php");
}else{
    echo "Error";
}