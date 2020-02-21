<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControleDeBonificacoes;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, Gerente};

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new Cpf('123.456.789-10'),
    1000
);
$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new Cpf('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new Cpf('789.456.123-11'),
    5000
);

$controlador = new ControleDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
echo $controlador->getTotalBonificacoes();