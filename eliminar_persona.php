<?php

    require 'db.php';

    $cedula = $_GET['cedula'];

    $conexiondb = conectardb();

    $query = "DELETE FROM persona WHERE cedula=".$cedula;

    $respuesta = mysqli_query($conexiondb, $query);

    if ($respuesta) {
        echo("Se borraron los datos de la persona");
        echo("<br>");
        echo("<a href='./listar_persona.php'>Listado de Personas</a>");
    } else {
        echo("Error: no se puede borrar la persona");
        echo("<br>");
        echo("<a href='./listar_persona.php'>Listado de Personas</a>");
    }
?>