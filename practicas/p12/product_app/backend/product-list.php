<?php


use TECWEB\MYAPI\READ\Read;

require_once __DIR__ . '/myapi/Read/Read.php';

$productos = new Read('marketzone');
$productos->list();
echo $productos->getData();
