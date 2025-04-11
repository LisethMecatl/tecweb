<?php

require_once __DIR__ . '/../vendor/autoload.php';


use myapi\Delete\Delete;

#require_once __DIR__ . '/myapi/Delete/Delete.php';

$productos = new Delete('marketzone');
$productos->delete($_POST['id']);
echo $productos->getData();
