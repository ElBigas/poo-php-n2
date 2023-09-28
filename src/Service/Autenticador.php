<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha)
    {
        if ($diretor->autentificar($senha)) {
            echo "Usuário logado";
        } else {
            echo 'Senha incorreta';
        }
    }
}