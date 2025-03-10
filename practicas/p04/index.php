<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>

<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
    <?php
    //AQUI VA MI CÓDIGO PHP
    $_myvar;
    $_7var;
    //myvar;       // Inválida
    $myvar;
    $var7;
    $_element1;
    //$house*5;     // Invalida

    echo '<h4>Respuesta:</h4>';

    echo '<ul>';
    echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
    echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
    echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
    echo '<li>$myvar es válida porque inicia con una letra.</li>';
    echo '<li>$var7 es válida porque inicia con una letra.</li>';
    echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
    echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
    echo '</ul>';


    unset($_myvar, $_7var, $myvar, $var7, $_element1);
    ?>
    ?>
    <br />
    <h2>Ejercicio 2</h2>
    <p>Proporcionar valores a $a, $b y $c y mostrar</p>
    <?php
    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a;
    echo '<ul>';
    echo '<li>' . $a . '</li>';
    echo '<li>' . $b . '</li>';
    echo '<li>' . $c . '</li>';
    echo '</ul>';
    ?>
    <p>A continiacion se muestra lo q sucede cuando se muestran las variables a y b al agregar el segundo codigo</p>
    <?php
    $a = "PHP server";
    $b = &$a;
    echo '<ul>';
    echo '<li>' . $a . '</li>';
    echo '<li>' . $b . '</li>';
    echo '</ul>';
    unset($a, $b, $c);
    ?>

    <p>Lo que sucedio aqui fue que a en un inicio tiene el valor de "ManejadorSQL" y b tiene el valor de 'MySQL', pero despues, con el segundo bloque de codigo a la vaiable $a se le asigna el valor de "PHP derver" y a la variable $b se le hace una referencia al valor de la variable $a, sin em bargo para este momento la variable $a tiene el valor de "MySQL" asi q al mostrar las dos variables ambas muestran "MySQL" </p>
    <br />


    <h2>Ejercicio 3</h2>
    <p>Mostrar contenido de cada variable inmediatamente despues de cada asignacion, verificar la evolucion del tipo de estas variables (imprimir todos los componentes del arreglo)</p>
    <?php
    error_reporting(0);
    $a = "PHP5";
    echo '<p>--Impresion de variable a: </p>';
    echo $a;
    echo '<br>';

    $z[] = &$a;
    echo '<p>--Impresion de arreglo con variable a: </p>';
    var_dump($z);
    echo '<br>';

    echo '<p>--Impresion de variable b: </p>';
    $b = "5a version de PHP";
    echo $b;
    echo '<br>';

    $c = $b * 10;
    echo '<p>--Impresion de variable c: </p>';
    echo  $c;
    echo '<br>';

    //El punto es un concatenados, concatena la variable a con el valor de la varianble b
    $a .= $b;
    echo '<p>--Impresión de variable a concatenada con b:</p>';
    echo  $a;
    echo '<br>';

    //multiplica la variable de la izquierda por el valor de la derecha y asigna el resultado a la variable de la izquierda.
    $b *= $c;
    echo '<p>--Impresion de variable b multiplicada con c: </p>';
    echo  $b;
    echo '<br>';

    $z[0] = "MySQL";
    echo '<p>--Impresion de arreglo z: </p>';
    var_dump($z);
    unset($a, $b, $c, $z);
    ?>

    <h2>Ejercicio 4</h2>
    <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
        la matriz $GLOBALS o del modificador global de PHP.</p>
    <!--uso de matriz $GLOBALS permite acceder a todas las variables globales de un script-->
    <?php
    $GLOBALS['a'] = "PHP5";
    echo '<p>--Impresion de variable a: </p>';
    echo $GLOBALS['a'];
    echo '<br>';

    $GLOBALS['z'][] = &$GLOBALS['a'];
    echo '<p>--Impresion de arreglo con variable a: </p>';
    var_dump($GLOBALS['z']);
    echo '<br>';

    $GLOBALS['b'] = "5a version de PHP";
    echo '<p>--Impresion de variable b: </p>';
    echo $GLOBALS['b'];
    echo '<br>';

    $GLOBALS['c'] = $GLOBALS['b'] * 10;
    echo '<p>--Impresion de variable c: </p>';
    echo $GLOBALS['c'];
    echo '<br>';

    // El punto es un concatenador, concatena la variable a con el valor de la variable b
    $GLOBALS['a'] .= $GLOBALS['b'];
    echo '<p>--Impresión de variable a concatenada con b:</p>';
    echo $GLOBALS['a'];
    echo '<br>';

    // Multiplica la variable de la izquierda por el valor de la derecha y asigna el resultado a la variable de la izquierda.
    $GLOBALS['b'] *= $GLOBALS['c'];
    echo '<p>--Impresion de variable b multiplicada con c: </p>';
    echo $GLOBALS['b'];
    echo '<br>';

    $GLOBALS['z'][0] = "MySQL";
    echo '<p>--Impresion de arreglo z: </p>';
    var_dump($GLOBALS['z']);

    unset($GLOBALS['a'], $GLOBALS['b'], $GLOBALS['C'], $GLOBALS['Z']);
    ?>
    <h2>Ejercicio 5</h2>
    <p>Dar el valor de las variables $a, $b, $c al final del siguiente script:</p>

    <?php
    $a = "7 personas";
    $b = (int) $a;
    $a = "9E3";
    $c = (float) $a;

    echo "<p>valor de a</p>" . $a;
    print "<p>valor de b</p>" . $b;
    print "<p>valor de c</p>" . $c;

    echo "<pre>";
    print_r(compact('a', 'b', 'c'));
    echo "</pre>";

    // Se liberan las variables
    unset($a, $b, $c);
    ?>



    <h2>Ejercicio 6</h2>
    <p>Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas
        usando la función var_dump("etiqueta de datos").
        Después investiga una función de PHP que permita transformar el valor booleano de $c y $e
        en uno que se pueda mostrar con un echo:</p>
    <?php
    $a = "0";
    $b = "TRUE";
    $c = FALSE;
    $d = ($a or $b);
    $e = ($a and $c);
    $f = ($a xor $b);

    echo "<pre>";
    var_dump($a, $b, $c, $d, $e, $f);
    echo "</pre>";

    echo "conversion:<br>";
    $c_cadena = $c ? 'true' : 'false';
    $e_cadena = $e ? 'true' : 'false';

    echo "c = $c_cadena<br>";
    echo "e = $e_cadena<br>";


    unset($a, $b, $c, $d, $e, $f);
    ?>

    <h2>Ejercicio 7</h2>
    <p>Usando la variable predefinida $_SERVER, determina lo siguiente:
        a. La versión de Apache y PHP,
        b. El nombre del sistema operativo (servidor),
        c. El idioma del navegador (cliente).</p>

    <?php
    echo "version Apache y PHP:  " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
    echo "Servidor:  " . PHP_OS . "<br>";
    echo "Idioma cliente:  " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>";
    echo "Nombre de mi servidor:  " . $_SERVER['SERVER_NAME'] . "<br>";
    ?>
</body>

</html>