<?php
// Lee el archivo JSON si existe el que se declara en guardar06.php
$archivo = 'autos.json';
//Convierte un string codificado en JSON a una variable de PHP. decodifica
$autos = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];

if (isset($_GET['todos'])) {
    // Muestra todos los autos registrados
    if (empty($autos)) {
        echo "<p>No hay autos registrados.</p>";
    } else {
        echo "<h2>Lista de Autos Registrados</h2>";
        //uso de foreach para ver autos por matricula
        foreach ($autos as $matricula => $info) {
            // se muestran los datos en etiquetas para una mejor visivilidad
            echo "<h3>Matrícula: $matricula</h3>";
            echo "<p><strong>Marca:</strong> " . $info['Auto']['marca'] . "</p>";
            echo "<p><strong>Modelo:</strong> " . $info['Auto']['modelo'] . "</p>";
            echo "<p><strong>Tipo:</strong> " . $info['Auto']['tipo'] . "</p>";
            echo "<p><strong>Propietario:</strong> " . $info['Propietario']['nombre'] . "</p>";
            echo "<p><strong>Ciudad:</strong> " . $info['Propietario']['ciudad'] . "</p>";
            echo "<p><strong>Dirección:</strong> " . $info['Propietario']['direccion'] . "</p>";
            echo "<hr>";
        }
    }
} elseif (!empty($_GET['matricula'])) {
    $matricula = strtoupper($_GET['matricula']);
    // se muestran los datos en etiquetas para una mejor visivilidad
    if (isset($autos[$matricula])) {
        $info = $autos[$matricula];
        echo "<h2>Información del Vehículo</h2>";
        echo "<p><strong>Matrícula:</strong> $matricula</p>";
        echo "<p><strong>Marca:</strong> " . $info['Auto']['marca'] . "</p>";
        echo "<p><strong>Modelo:</strong> " . $info['Auto']['modelo'] . "</p>";
        echo "<p><strong>Tipo:</strong> " . $info['Auto']['tipo'] . "</p>";
        echo "<p><strong>Propietario:</strong> " . $info['Propietario']['nombre'] . "</p>";
        echo "<p><strong>Ciudad:</strong> " . $info['Propietario']['ciudad'] . "</p>";
        echo "<p><strong>Dirección:</strong> " . $info['Propietario']['direccion'] . "</p>";
    } else {
        echo "<p>No se encontró la matrícula ingresada.</p>";
    }
} else {
    echo "<p>Por favor, ingrese una matrícula o seleccione la opción de ver todos.</p>";
}
