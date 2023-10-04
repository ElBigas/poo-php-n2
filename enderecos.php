<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco1 = new Endereco('Londrina', 'Centro', 'JK', '1234');

$endereco2 = new Endereco('Ibipora', 'Centro', 'Olavo Bilac', '4321');

echo $endereco2 . PHP_EOL;
$endereco2->bairro = 'n/a';
echo $endereco2;
