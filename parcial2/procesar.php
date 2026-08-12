<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PEDIDO RECIBIDO EN HELADERIA DOÑA NIEVE</title>
</head>
<body>
<?php
echo "<h1>Pedido recibido en Heladeria Doña Nieve</h1>";
echo "<p>Nombre: " . $_POST["nombre"] . "</p>";
echo "<p>Correo: " . $_POST["correo"] . "</p>";
echo "<p>Sabores: " . $_POST["sabores"] . "</p>";
$productos = array(
    "Cono simple - Bs 8",
    "Copa doble - Bs 15",
    "Litro para llevar - Bs 35"
);
echo "<h2>Carta de la heladeria</h2>";
echo "<ul>";
foreach ($productos as $producto) {
    echo "<li>" . $producto . "</li>";
}
echo "</ul>";
echo "<p>Te atiende Joel Marcos Canaviri Vargas.</p>";
?>
</body>
</html>
