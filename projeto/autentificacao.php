<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autentificador;
require_once 'autoload.php';

$autentificador = new Autentificador();
$umDiretor = new Gerente(
    'João da Silva',
    new Cpf('123.456.789-10'),
    10000
);

$autentificador->tentaLogin($umDiretor, '4321');