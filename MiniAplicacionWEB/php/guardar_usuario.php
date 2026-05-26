<?php
  
  //Procesamiento de Registro de Usuario
  //Implementa seguridad mediante Hash SHA1 según requerimiento. 


// Se incluye la conexión (Arquitectura Cliente-Servidor)
include('../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos los datos del formulario
    $usuario = $_POST['username'];
    $password_plana = $_POST['password'];

    // Aplicamos Hash SHA1 a la contraseña:
    // Esto evita que la contraseña sea legible en la base de datos.
    $password_segura = sha1($password_plana);

    // Insertar en la base de datos: 

    $sql = "INSERT INTO usuarios (nombre, password) VALUES ('$usuario', '$password_segura')";

    if (mysqli_query($conn, $sql)) {
        echo "Usuario registrado con éxito con seguridad SHA1.";
    } else {
        echo "Error al registrar: " . mysqli_error($conn);
    }
}

// Cerramos la conexión
mysqli_close($conn);
?>