<?php
session_start();
if (!isset($_GET["id"])) {
    header('location: index.php');
}


if (!isset($_SESSION["nombre"])) {
    header("location: login.php");
} elseif (isset($_SESSION["nombre"])) {
    include 'model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("SELECT * FROM alumno WHERE id_alumno = ?");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
} else {
    echo "Error";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <center>
        <h3>Editar Alumno</h3>
        <form action="editarProceso.php" method="post">
            <table>
                <tr>
                    <td>Apellido Paterno</td>
                    <td><input type="text" name="txt2Paterno" value="<?php echo $persona->ap_paterno; ?>"></td>
                </tr>
                <tr>
                    <td>Apellido Materno</td>
                    <td><input type="text" name="txt2Materno" value="<?php echo $persona->ap_materno; ?>"></td>
                </tr>

                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="txt2Nombre" value="<?php echo $persona->nombre; ?>"></td>
                </tr>
                <!-- Editando edad -->
                <tr>
                    <td>Edad:</td>
                    <td><input type="number" name="txt2Edad" value="<?php echo $persona->edad; ?>" id=""></td>
                </tr>
                <!-- Fin editando edad -->

                <!-- Sexo (SELECT) -->
                <tr>
                    <td>Sexo:</td>
                    <td>
                        <select name="txt2Sexo" value="<?php echo $persona->sexo; ?>" id="">
                            <option value="femenino">Femenino</option>
                            <option value="masculino">Masculino</option>
                            <option value="vacio" selected>--</option>
                        </select>
                    </td>
                </tr>
                <!-- Fin Sexo (SELECT) -->

                <tr>
                    <td>Parcial</td>
                    <td><input type="text" name="txt2Parcial" value="<?php echo $persona->ex_parcial; ?>"></td>
                </tr>
                <tr>
                    <td>Final</td>
                    <td><input type="text" name="txt2Final" value="<?php echo $persona->ex_final; ?>"></td>
                </tr>

                <tr>
                    <input type="hidden" name="Oculto">
                    <input type="hidden" name="id2" value="<?php echo $persona->id_alumno; ?>">
                    <td colspan="2"><input type="submit" value="Editar Alumno"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>