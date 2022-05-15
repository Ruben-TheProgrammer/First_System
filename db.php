<?php
    function conectardb() {
        $servidor = 'localhost';
        $usuario = 'simonandres';
        $contraseña = 'secreto';
        $personadb = 'sistema';

        $conexion = mysqli_connect($servidor, $usuario, $contraseña, $personadb);

        return $conexion;
    }
?>