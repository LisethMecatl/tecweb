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

echo "Se obtuvieron " . $total_n . " numeros con " . $iteracion . " ieracion(es)";
echo '<br>';
print_r($datos);
?>