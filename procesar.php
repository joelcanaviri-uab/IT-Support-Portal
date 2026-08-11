<?php
$nombre = $_POST["name"];
$correo = $_POST["email"];
$mensaje = $_POST["message"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Solicitud recibida</title>
</head>
<body>
    <h1>Solicitud recibida</h1>
    <p>
        <strong>Nombre:</strong>
        <?php echo $nombre; ?>
    </p>
    <p>
        <strong>Correo:</strong>
        <?php echo $correo; ?>
    </p>
    <p>
        <strong>Mensaje:</strong>
        <?php echo $mensaje; ?>
    </p>
</body>
</html>