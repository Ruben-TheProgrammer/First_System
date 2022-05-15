<?php

include 'db.php';

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$editar = $_POST['editar'];
$id_pais = $_POST['id_pais'];

$conexiondb = conectardb();

if ($editar == "si") {
    $query = "UPDATE persona SET nombre='" . $nombre . "', apellido='" . $apellido . "' WHERE cedula='" . $cedula . "'";
} else {
    $query = "INSERT INTO persona (cedula, nombre, apellido, id_pais) VALUES 
        ('$cedula', '$nombre', '$apellido', $id_pais)";
}

$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
    if ($editar == "si") {
        echo ("Se Actualizo la persona");
    } else {
        echo ("Se Registro la persona");
    }
} else {
    if ($editar == "si") {
        echo ("No se pudo actualizar la persona");
    } else {
        echo ("No se pudo registrar la persona");
    }
}

mysqli_close($conexiondb);
