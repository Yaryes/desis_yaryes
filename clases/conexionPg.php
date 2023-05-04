<?php
    $servidor = "localhost";
    $usuario = "postgres";
    $contrasenia = "root";
    $basedatos = "laliga";
    $conexion = pg_connect("host=$servidor dbname=$basedatos user=$usuario password=$contrasenia");


    // try {
    //     $connect = new PDO ("pgsql:host=$servidor ; dbname=$basedatos", $usuario, $contrasenia);
    //     echo "se conecto correctamente";
    //     } catch (PDOException $exp ) {
    //         echo "fallo";
    //     }
    // return $connect;


