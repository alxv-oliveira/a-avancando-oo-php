<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get($nomeAtributo)
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }   
}