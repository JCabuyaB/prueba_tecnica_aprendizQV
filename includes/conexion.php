<?php
    $server = 'localhost:3306';
    $username = 'root';
    $pass = '';
    $db = 'login';

    $error = '';

    try{
        $conexion = new PDO("mysql:host=$server;dbname=$db;", $username, $pass);
    }catch (PDOException $ex){
        $error = $ex->getMessage();
    }