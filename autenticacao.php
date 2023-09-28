<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$cpf = new Cpf('123.456.789-10');

$diretor = new Diretor('Emanuel', $cpf, 4000);

$autenticador->tentaLogin($diretor, '1234');