<?php
    $server = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'prueba';

    $conexion  = mysqli_connect($server, $username, $pass, $db);

    mysqli_query($conexion, "SET NAMES 'utf8mb4'");
