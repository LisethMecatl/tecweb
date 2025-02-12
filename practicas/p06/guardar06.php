<?php
// Se define el archivo donde se almacenarán los datos
//formato de archivo que se utiliza para almacenar y transferir datos de manera estructurada y fácil de leer.
$archivo = 'autos.json';

// Lee los datos actuales del archivo JSON si existe
$autos = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];

// Obtener datos del formulario
$matricula = strtoupper($_POST['matricula']); // Convertir a mayúsculas =)
$auto = [
    'marca' => $_POST['marca'],
    'modelo' => $_POST['modelo'],
    'tipo' => $_POST['tipo']
];
$propietario = [
    'nombre' => $_POST['nombre'],
    'ciudad' => $_POST['ciudad'],
    'direccion' => $_POST['direccion']
];

// Valida el formato de la matrícula (tres letras seguidas de cuatro números)
if (!preg_match('/^[A-Z]{3}[0-9]{4}$/', $matricula)) {
    echo "<p>Error: La matrícula debe tener el formato LLLNNNN (Ejemplo: ABC1234).</p>";
    exit; // Terminar el script si la matrícula no es válida 
}

// Valida que la matrícula no esté repetida
if (isset($autos[$matricula])) {
    echo "<p>Error: La matrícula ya está registrada.</p>";
} else {
    // Guarda en el arreglo de autos
    $autos[$matricula] = ['Auto' => $auto, 'Propietario' => $propietario];
    file_put_contents($archivo, json_encode($autos, JSON_PRETTY_PRINT)); // Guarda en JSON codifica

    echo "<p>Vehículo registrado con éxito.</p>";
}

// Muestra estructura con print_r
echo "<pre>";
print_r($autos);
echo "</pre>";
