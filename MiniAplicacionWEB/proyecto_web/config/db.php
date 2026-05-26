<?php

   //Este archivo gestiona la conexión al servidor.

$host = "localhost";
$user = "root";
$pass = "";
$db   = "proyecto_web";

// Crear la conexión:
$conn = mysqli_connect($host, $user, $pass, $db);

// Verificar conexión:
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>