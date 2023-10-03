<?php

namespace Alura\Banco\Service;

class Autenticador
{
    public function tentaLogin(Autenticador $usuario, string $senha)
    {
        if ($usuario->autentificar($senha)) {
            echo "Usuário logado";
        } else {
            echo 'Senha incorreta';
        }
    }

    private function autentificar(string $senha)
    {

    }
}