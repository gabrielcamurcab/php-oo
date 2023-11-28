<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$contaBancaria = new ContaBancaria();
//var_dump($contaBancaria);
$contaBancaria->setBanco("Banco Inter");
var_dump($contaBancaria->getBanco());