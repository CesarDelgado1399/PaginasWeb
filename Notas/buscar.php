<?php
//Buscar por nombre

session_start();
if (!isset($_POST["buscar"])) {
    echo "fallo conexion";
}

if (!isset($_SESSION["nombre"])) {
    header("location: login.php");
} elseif (isset($_SESSION["nombre"])) {
    include 'model/conexion.php';
    $b_Paterno = $_POST["txtbuscar"];
    $sentenciaB = $bd->query("SELECT * FROM alumno WHERE ap_paterno like '%$b_Paterno%' or ap_materno like '%$b_Paterno%' or nombre like '%$b_Paterno%' ");
    $buscar = $sentenciaB->fetchAll(PDO::FETCH_OBJ);
    //print_r($buscar);
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
    <link rel="stylesheet" href="style.css">
    <title>Busqueda</title>
</head>

<body>
    <center>
        <div class="alumnos">
        <div class="cabecera">
            <h2 style="margin-bottom: 2rem;">Busqueda de Alumnos</h2>
            <!-- <a class="a_cerrar" href="index.php">Regresar</a> -->
            <form style="margin-bottom: 2rem;" action="buscar.php" method="post">
                <label for="txtbuscar">Buscar: </label>
                <input type="text" name="txtbuscar" id="">
                <input type="submit" value="Buscar" name="buscar">
                <a class="a_cerrar" href="index.php">Regresar</a>
            </form>
        </div>
        <table class="tb-lista">
            <tr>
                <td>Codigo</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Examen Parcial</td>
                <td>Examen Final</td>
                <td>Promedio</td>
                <td>Acciones</td>
            </tr>

            <?php
            foreach ($buscar as $dato) {
            ?>
                <tr style="background-color: rgba(39, 179, 46, 0.637);">
                    <td><?php echo $dato->id_alumno ?></td>
                    <td><?php echo $dato->ap_paterno ?></td>
                    <td><?php echo $dato->ap_materno ?></td>
                    <td><?php echo $dato->nombre ?></td>
                    <td><?php echo $dato->edad ?></td>
                    <td><?php echo $dato->sexo ?></td>
                    <td><?php echo $dato->ex_parcial ?></td>
                    <td><?php echo $dato->ex_final ?></td>
                    <td><?php echo ($dato->ex_final + $dato->ex_parcial) / 2 ?></td>
                    <td><a class="a_editar" href="editar.php?id=<?php echo $dato->id_alumno; ?>">Editar</a>
                        <a class="a_eliminar" href="eliminar.php?id=<?php echo $dato->id_alumno; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>

        </div>

        <!-- Insert -->
        <hr>
        <h3>Ingresar Alumnos: </h3>
        <form action="insertar.php" method="post">
            <fieldset>
                <Legend>Datos</Legend>
                <table>
                    <tr>
                        <td>Apellido Paterno:</td>
                        <td><input type="text" name="txtPaterno" id="" required></td><br>
                    </tr>

                    <tr>
                        <td>Apellido Materno:</td>
                        <td><input type="text" name="txtMaterno" id="" required></td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="txtNombre" id="" required></td>
                    </tr>
                    <!-- Edad (INPUT) -->
                    <tr>
                        <td>Edad:</td>
                        <td><input type="number" name="txtEdad" id="" required></td>
                    </tr>

                    <!-- Sexo (SELECT) -->
                    <tr>
                        <td>Sexo:</td>
                        <td>
                            <select name="txtSexo" id="" required>
                                <option value="femenino">Femenino</option>
                                <option value="masculino">Masculino</option>
                                <option value="vacio" selected>--</option>
                            </select>
                        </td>
                    </tr>
                    <!-- Fin Sexo (SELECT) -->

                    <tr>
                        <td>Parcial:</td>
                        <td><input type="text" name="txtParcial" id="" required></td>
                    </tr>

                    <tr>
                        <td>Nota Final:</td>
                        <td><input type="text" name="txtFinal" id="" required></td>
                    </tr>
                    <input type="hidden" name="Oculto" value="1">
                    <tr>
                        <td><input type="reset" value="Reset"></td>
                        <td><input type="submit" value="Ingresar Alumno"></td>
                    </tr>

                    <!-- Implementar un SELECT y un INPUT -->
                    <!-- Agregar 30 registros -->
                    <!-- Crear una busqueda por nombre y apellidos -->
                </table>
            </fieldset>
        </form>
        <!-- fin Insert -->
    </center>

</body>

</html>