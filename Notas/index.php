<?php
session_start();
if (!isset($_SESSION["nombre"])) {
    header("location: login.php");
} elseif (isset($_SESSION["nombre"])) {
    include 'model/conexion.php';
    $sentencia = $bd->query("SELECT * FROM alumno");
    $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($alumnos);

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
    <title>Lista de Alumnos</title>
</head>

<body>
    <center>
        <div id="bajar" class="alumnos">
            <!--Div de alumnos-->
            <div class="cabecera">
                <h1>Bienvenido: <?php echo $_SESSION["nombre"]; ?></h1>
                <a class="a_cerrar" href="cerrar.php">Cerrar Sesion</a>
                <button id="btnAgregar">Agregar Alumno</button>
                <h3>Lista de Alumnos</h3>
                <form action="buscar.php" method="post">
                    <label for="txtbuscar">Buscar: </label>
                    <input type="search" name="txtbuscar" id="">
                    <input type="submit" value="Buscar" name="buscar">
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
                foreach ($alumnos as $dato) {
                ?>
                    <tr>
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
        <!--Div de alumnos-->


        <!-- Insert -->
        <div id="aparecer" class="insertar">
            <hr>
            <h3>Ingresar Alumnos: </h3>
            <form action="insertar.php" method="post">
                <fieldset>
                    <Legend>Datos:</Legend>
                    <table>
                        <tr>
                            <td>Apellido Paterno:</td>
                            <td><input type="text" name="txtPaterno" id=""></td><br>
                        </tr>

                        <tr>
                            <td>Apellido Materno:</td>
                            <td><input type="text" name="txtMaterno" id=""></td>
                        </tr>
                        <tr>
                            <td>Nombre:</td>
                            <td><input type="text" name="txtNombre" id=""></td>
                        </tr>
                        <!-- Edad (INPUT) -->
                        <tr>
                            <td>Edad:</td>
                            <td><input type="number" name="txtEdad" id=""></td>
                        </tr>

                        <!-- Sexo (SELECT) -->
                        <tr>
                            <td>Sexo:</td>
                            <td>
                                <select name="txtSexo" id="">
                                    <option value="femenino">Femenino</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="vacio" selected>--</option>
                                </select>
                            </td>
                        </tr>
                        <!-- Fin Sexo (SELECT) -->

                        <tr>
                            <td>Parcial:</td>
                            <td><input type="text" name="txtParcial" id=""></td>
                        </tr>

                        <tr>
                            <td>Nota Final:</td>
                            <td><input type="text" name="txtFinal" id=""></td>
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
        </div>
        <!-- fin Insert -->

    </center>
    <script src="app.js"></script>
</body>

</html>