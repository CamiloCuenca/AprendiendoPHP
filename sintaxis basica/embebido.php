<?php
$fecha = date("d/m/y"); // La función date debe estar en minúsculas
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : ''; // Captura el valor de 'nombre', si existe
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capturar Nombre</title>
</head>
<body>

<p>La fecha de hoy es: <?php echo $fecha; ?></p>

<!-- Formulario para capturar el nombre -->
<form method="get">
    <label for="nombre">Introduce tu nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
    <button type="submit">Enviar</button>
</form>

<!-- Mostrar el nombre capturado -->
<p><?php echo $nombre ? "Hola, " . htmlspecialchars($nombre) . "!" : "Por favor, introduce tu nombre."; ?></p>

</body>
</html>
