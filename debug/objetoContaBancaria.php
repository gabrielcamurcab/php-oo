<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$contaBancaria = new ContaBancaria();
//var_dump($contaBancaria);
$contaBancaria->setBanco("Banco Inter");
$contaBancaria->setNomeTitular("Gabriel Camurça");
$contaBancaria->setAgencia("0001");
$contaBancaria->setConta("45879-1");
$contaBancaria->setSaldo(1.99);
var_dump($contaBancaria->exibirDadosDaConta());