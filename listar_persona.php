<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
</head>

<body>
    <?php
    include 'db.php';
    $conexiondb = conectardb();
    $query = "SELECT persona.apellido, persona.nombre, persona.cedula, 
    paises.nombre AS pais  FROM persona JOIN paises 
    ON paises.id = persona.id_pais";
    $resultado = mysqli_query($conexiondb, $query);
    mysqli_close($conexiondb);
    ?>

    <h1>Listado de Personas</h1>

    <?php
    echo("<ul>");
    while ($persona = mysqli_fetch_assoc($resultado)) {
        echo "<li>" . $persona['nombre'] . " " . $persona['apellido'] . " --- " . $persona['cedula'] ." --- ".$persona['pais'] . " <a href='./editar_persona.php?cedula=" . $persona['cedula'] . "'>EDITAR</a>
                " . "  <a href='./eliminar_persona.php?cedula=" . $persona['cedula'] . "'>ELIMINAR</a></li>";
    }
    echo("</ul>");
    ?>


</body>

</html>