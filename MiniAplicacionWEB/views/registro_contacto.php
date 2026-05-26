<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Contacto</title>
</head>
<body>
    <h2>Nuevo Contacto</h2>
    <form id="formContacto" action="../php/guardar_contacto.php" method="POST" onsubmit="return validar()">
        <input type="text" id="nombre" name="nombre" placeholder="Nombre completo"><br><br>
        <input type="text" id="tel" name="tel" placeholder="Teléfono"><br><br>
        <button type="submit">Guardar Contacto</button>
    </form>

    <script>
    function validar() {
        if(document.getElementById('nombre').value == "" || document.getElementById('tel').value == "") {
            alert("Llena todos los campos");
            return false;
        }
        return true;
    }
    </script>
</body>
</html>