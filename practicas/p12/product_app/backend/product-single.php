<?php

require_once __DIR__ . '/../vendor/autoload.php';

use myapi\Read\Read;

#require_once __DIR__ . '/myapi/Read/Read.php';

$productos = new Read('marketzone');
$productos->single($_POST['id']);
echo $productos->getData();
