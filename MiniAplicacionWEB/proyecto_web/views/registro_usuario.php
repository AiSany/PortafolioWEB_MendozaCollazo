<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Nuevo Usuario</h2>
    <form id="formUser" action="../php/guardar_usuario.php" method="POST" onsubmit="return validarRegistro()">
        <label>Nombre de Usuario:</label><br>
        <input type="text" id="username" name="username"><br><br>
        
        <label>Contraseña:</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <button type="submit">Registrar</button>
    </form>

    <script>
    // Validación básica en JS para el front end:
    function validarRegistro() {
        let user = document.getElementById('username').value;
        let pass = document.getElementById('password').value;

        if (user.trim() === "" || pass.trim() === "") {
            alert("Error: Todos los campos son obligatorios.");
            return false;
        }
        return true; // Permite el envío al servidor
    }
    </script>
</body>
</html>