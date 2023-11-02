<?php

namespace Alura\Banco\Modelo;

class NomeInvalidoException extends \Exception
{
    public function __construct()
    {
        $message = "Nome precisa ter pelo menos 5 caracteres";
        parent::__construct($message);
    }
}