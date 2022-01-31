<?php
    session_start();
    include_once "model/conexion.php";
    $usuario = $_POST["txtUsu"];
    $contrasena = $_POST["txtPass"];

    $sentencia = $bd->prepare("SELECT * FROM t_usuario WHERE nombre_usu = ? AND password_usu = ?");
    $sentencia -> execute([$usuario,$contrasena]);
    $datos = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($datos);
    if($datos === false){
        header("location: login.php");
    }elseif($sentencia->rowCount() == 1){
        echo $_SESSION["nombre"] = $datos->nombre_usu;
        header("location: login.php");
    }

