<?php
    session_start();
    if(isset($_SESSION["nombre"])){
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <center>
        <form action="loginProceso.php" method="post">
            <label for="">Usuario</label>
            <input type="text" name="txtUsu" id="">
            <br>
            <label for="txtPass">Contraseña</label>
            <input type="password" name="txtPass" id="">
            <br>
            <input type="submit" value="Iniciar Sesion">
        </form>
    </center>
</body>

</html>