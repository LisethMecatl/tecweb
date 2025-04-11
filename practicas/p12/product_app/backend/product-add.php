<?php

require_once __DIR__ . '/../vendor/autoload.php';

use myapi\Create\Create;

#require_once __DIR__ . '/myapi/Create/Create.php';

$productos = new Create('marketzone');
$productos->add(json_decode(json_encode($_POST)));
echo $productos->getData();
