<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Cita</title>
</head>
<body>
    <h2>Agendar Cita</h2>
    <form id="formCita" action="../php/guardar_cita.php" method="POST" onsubmit="return validar()">
        <input type="date" id="fecha" name="fecha"><br><br>
        <textarea id="asunto" name="asunto" placeholder="Asunto de la cita"></textarea><br><br>
        <button type="submit">Agendar</button>
    </form>

    <script>
    function validar() {
        if(document.getElementById('fecha').value == "" || document.getElementById('asunto').value == "") {
            alert("Faltan datos de la cita");
            return false;
        }
        return true;
    }
    </script>
</body>
</html>