<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$cpf = new Cpf('123.456.789-10');
$endereco = new Endereco('Londrina', 'Centro', 'JK', '1234');
$titular = new Titular('Emanuel', $cpf, $endereco);
$funcionario = new Diretor('Maria', $cpf, 4000);

$autenticador = new Autenticador();

$autenticador->tentaLogin($titular, 'abcd');

echo PHP_EOL;

$autenticador->tentaLogin($funcionario, '1234');