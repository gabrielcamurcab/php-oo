<?php

declare(strict_types=1);

$pdo = null;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=loja', 'novousuario', 'senha_segura');
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

return $pdo;