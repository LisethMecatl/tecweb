<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once __DIR__ . '/Persona.php';

    $per1 = new Persona;
    $per1->inicializar('Fulano');
    //invoca metodo mostrar
    $per1->mostrar();


    $per2 = new Persona;
    $per2->inicializar('Mengano');
    //invoca metodo mostrar
    $per2->mostrar();
    ?>
</body>

</html>