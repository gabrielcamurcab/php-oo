<?php

// Primitiva (Não OO)
$dataAtual = date('d/m/Y');
echo $dataAtual . PHP_EOL;

// Orientada a Objetos
$data = new DateTime();
echo $data->format('d/m/Y H:i:s') . PHP_EOL;

$dataNasc = new DateTimeImmutable('2003-09-24');

$intervalo = new DateInterval('PT5MP2Y');
$novaData = $data->sub($intervalo);
$idade = $dataNasc->diff($data);

echo $idade->format('%R%a dias');

var_dump($novaData);