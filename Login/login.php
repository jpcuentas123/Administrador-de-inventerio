<?php

$mysql_usuario= "admin";
        $mysql_password = "";
        $mysql_host = "localhost";
        $mysql_database = "users";        

$conexion = mysqli_connect($mysql_host, $mysql_usuario, $mysql_password);
if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
};

?>