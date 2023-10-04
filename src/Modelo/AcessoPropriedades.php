<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    //com este metodo podemos acessar metodos que não existem ou são privados
    public function __get(string $nomeAtributo)
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    //seta novos valores
    public function __set(string $nomeAtributo, $value): void
    {
        $this->$nomeAtributo = $value;
    }
}