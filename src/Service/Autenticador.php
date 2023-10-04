<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $usuario, string $senha): void
    {
        if ($usuario->podeAutenticar($senha)) {
            echo "Usuário logado";
        } else {
            echo 'Senha incorreta';
        }
    }
}