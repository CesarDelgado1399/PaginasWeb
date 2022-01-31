<?php
if(!isset($_POST['Oculto'])){
    exit();
}
include "model/conexion.php";
$paterno = $_POST['txtPaterno'];
$materno = $_POST['txtMaterno'];
$nombre = $_POST['txtNombre'];
$edad = $_POST['txtEdad'];
$sexo = $_POST['txtSexo'];
$parcial = $_POST['txtParcial'];
$final = $_POST['txtFinal'];

$sentencia = $bd->prepare("INSERT INTO alumno(ap_paterno,ap_materno,nombre,edad,sexo,ex_parcial,ex_final) VALUES (?,?,?,?,?,?,?)");//Seguridad para que no nos hagan inyection
$resultado = $sentencia->execute([$paterno,$materno,$nombre,$edad,$sexo,$parcial,$final]);

if($resultado === true){
    header("location: index.php");
}else{
    echo "Error";
}