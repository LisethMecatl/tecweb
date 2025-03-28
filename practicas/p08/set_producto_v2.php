<?php
// SE CREA EL OBJETO DE CONEXION 
@$link = new mysqli('localhost', 'root', '', 'marketzone');

//comprobacion de conexión
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
    //IMPORTANTE: con @ se suprime el Warning para gestionar el error por medio de código 
}

//Verificacion de que llegan datos
/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/


//Obtener datos del form
$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$marca = isset($_POST['marca']) ? trim($_POST['marca']) : '';
$modelo = isset($_POST['modelo']) ? trim($_POST['modelo']) : '';

$precio = $_POST['precio'] ?? '';
$detalles = $_POST['detalles'] ?? '';
$unidades = $_POST['unidades'] ?? 0;
$imagen = 'p08/img/imagen.png';


//validacion de campos no vacios
if (empty($nombre) || empty($marca) || empty($modelo)) {
    exit("<h3 style='color: red;'>Error: Nombre, Marca y Modelo son obligatorios.</h3>");
}



// Verificar si el producto ya existe
$sql_check = "SELECT id FROM productos WHERE nombre = ? AND marca = ? AND modelo = ?";
$stmt = $link->prepare($sql_check);
$stmt->bind_param("sss", $nombre, $marca, $modelo);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    die('<h3>Error: El producto ya está registrado.</h3>');
}
$stmt->close();

// Insertar el producto si no existe
$sql_insert = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, imagen) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $link->prepare($sql_insert);
$stmt->bind_param("sssdsis", $nombre, $marca, $modelo, $precio, $detalles, $unidades, $imagen);

if ($stmt->execute()) {
    echo "<h3>Producto registrado correctamente</h3>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Marca: $marca</p>";
    echo "<p>Modelo: $modelo</p>";
    echo "<p>Precio: $$precio</p>";
    echo "<p>Detalles: $detalles</p>";
    echo "<p>Unidades disponibles: $unidades</p>";
} else {
    echo "<h3>Error al registrar el producto.</h3>";
}

$stmt->close();
$link->close();
