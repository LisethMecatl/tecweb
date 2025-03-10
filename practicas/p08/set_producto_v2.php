<?php
// SE CREA EL OBJETO DE CONEXION 
@$link = new mysqli('localhost', 'root', '12345678910', 'marketzone');

//comprobacion de conexión
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
    //IMPORTANTE: con @ se suprime el Warning para gestionar el error por medio de código 
}


//Obtener datos del form
$nombre = $_POST['nombre'] ?? '';
$marca = $_POST['marca'] ?? '';
$modelo = $_POST['modelo'] ?? '';
$precio = $_POST['precio'] ?? '';
$detalles = $_POST['detalles'] ?? '';
$unidades = $_POST['unidades'] ?? '';
$imagen = 'p08/img/imagen.png';


//validacion de campos no vacios
if (empty($nombre) || empty($modelo)) {
    die('<h3>Error: Nombre, Marca y Modelo obligatorios.</h3>');
}



$insertar_producto = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, imagen) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $link->prepare($insertar_producto);
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
