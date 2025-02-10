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
?>

<h2>Ejercicio 2</h2>
<p>Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una</p>
<p>secuencia compuesta por: <strong> impar, par, impar</strong></p>
<?php
$par = 0;
$impar1 = 0;
$impar2 = 0;
$iteracion = 0;
$datos = [];
$total_n = 0;
while ($impar1 % 2 != 1 || $par % 2 != 0 || $impar2 % 2 != 1) {
    $impar1 = rand(1, 1000);
    $par = rand(1, 1000);
    $impar2 = rand(1, 1000);
    $iteracion += 1;
    $datos[] = [$impar1, $par, $impar2];
    $total_n = $total_n + 3;
}

echo "Se obtuvieron " . $total_n . " numeros con " . $iteracion . " iteracion(es)";
echo '<br>';
print_r($datos);
echo '<br>';
echo "Otra vista: ";
echo "<pre>";
print_r($datos);
echo "</pre>";
?>

<h2>Ejercicio 3</h2>
<p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.</p>
<p>• Crear una variante de este script utilizando el ciclo do-while.</p>
<p>• El número dado se debe obtener vía GET.</p>

<?php

if (isset($_GET['numero'])) {
    do {
        $num = $_GET['numero'];
        $aleatorio = rand(1, 1000);
    } while ($aleatorio % $num != 0);
    echo '<h3>R= El número ' . $aleatorio . ' SÍ es múltiplo de '  . $num . '</h3>';
}

?>

<h2>Ejercicio 4</h2>
<p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’
    a la ‘z’. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner
    el valor en cada índice.</p>

<?php
$abecedario = array();

for ($i = 97; $i <= 122; $i++) {
    $abecedario[$i] = chr($i);
};

echo "<table border=2>";
echo '<tr>';
$counter = 0;

foreach ($abecedario as $valor => $char) {
    if ($counter % 2 == 0 && $counter != 0) {
        echo "</tr><tr>";
    }

    echo '<td>' . $valor . '</td>';
    echo '<td>' . $char . '</td>';
    $counter++;
};
echo '</table>';
echo "</table>";
?>