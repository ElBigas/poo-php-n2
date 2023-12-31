<?php

namespace Alura\Banco\Modelo;

final class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->validaCpf($numero);
        $this->numero = $numero;
    }

    public function getNumero() : string
    {
        return $this->numero;
    }

    private function validaCpf($numero) : void
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' =>
                [
                    'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
                ]
        ]);
            if ($numero === false) {
                throw new \InvalidArgumentException("CPF inválido");
            }
    }
}