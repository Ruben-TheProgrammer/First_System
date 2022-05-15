<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
</head>

<body>
    <?php
    include 'db.php';
    $cedula = $_GET['cedula'];
    $conexiondb = conectardb();
    $query = "SELECT persona.apellido, persona.nombre, persona.cedula, 
    paises.nombre AS nombre_pais, paises.id AS id_pais  FROM persona JOIN paises 
    ON paises.id = persona.id_pais WHERE persona.cedula =" . $cedula;
    $respuesta = mysqli_query($conexiondb, $query);
    $persona = mysqli_fetch_row($respuesta);
    mysqli_close($conexiondb);
    ?>

    <?php
    $conexiondb = conectardb();
    $query = "SELECT * FROM paises ORDER BY nombre ASC";
    $resultado = mysqli_query($conexiondb, $query);
    mysqli_close($conexiondb);
    ?>

    <h1>Editar Persona</h1>

    <form action="guardar_persona.php" method="post">
        <table border="0">
            <tr>
                <th><b><label for="">Cedula:</label></b></th>
                <th><input type="text" name="cedula" id="" value='<?php echo $persona[0]; ?>' readonly></th>
            </tr>

            <tr>
                <th><b><label for="">Nombre:</label></b></th>
                <th><input type="text" name="nombre" id="" value='<?php echo $persona[1]; ?>'></th>
            </tr>

            <tr>
                <th><b><label for="">Apellido:</label></b></th>
                <th><input type="text" name="apellido" id="" value='<?php echo $persona[2]; ?>'></th>
            </tr>

            <th><b><label for="">Pais:</label></b></th>
            <th>
                <select name="id_pais" class=" form-control" id="inputGroupSelect01">
                    <?php
                    while ($pais = mysqli_fetch_assoc($resultado)) {
                        if ($pais['id'] == $persona[4]) {
                            echo "<option selected value='" . $pais['id'] . "'>" . $pais['nombre'] . "</option>";
                        } else {
                            echo "<option value='" . $pais['id'] . "'>" . $pais['nombre'] . "</option>";
                        };
                    }
                    ?>
                </select>
            </th>

        </table>
        <input type="hidden" name="editar" id="" value='si' readonly>
        <input type="submit" value="GUARDAR">
    </form>

</body>

</html>