<h1>Practica 6:Uso de funciones, ciclos y arreglos en PHP</h1>
<h2>Ejercicio 1</h2>
<p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
<?php
if (isset($_GET['numero'])) {
    $num = $_GET['numero'];
    if ($num % 5 == 0 && $num % 7 == 0) {
        echo '<h3>R= El número ' . $num . ' SÍ es múltiplo de 5 y 7.</h3>';
    } else {
        echo '<h3>R= El número ' . $num . ' NO es múltiplo de 5 y 7.</h3>';
    }
}
