<?php
header('Content-Type: application/xhtml+xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<head>
    <title>Respuesta</title>
</head>

<body>
    <h2>Respuesta del Formulario</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
        $edad = isset($_POST['edad']) ? intval($_POST['edad']) : 0;
        $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';

        if ($sexo == 'femenino' && $edad >= 18 && $edad <= 35) {
            echo '<h4>Bienvenida ' . $nombre . ', usted está en el rango permitido</h4>';
        } else {
            echo '<h4>Lo siento ' . $nombre . ', usted NO está en el rango permitido</h4>';
        }
    } else {
        echo "<h4>No se han recibido datos del formulario.</h4>";
    }
    ?>
</body>

</html>