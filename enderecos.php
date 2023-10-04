<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco1 = new Endereco('Londrina', 'Centro', 'JK', '1234');

$endereco2 = new Endereco('Ibipora', 'Centro', 'Olavo Bilac', '4321');

echo $endereco1->numero;

echo $endereco1 . PHP_EOL;
echo $endereco2;
