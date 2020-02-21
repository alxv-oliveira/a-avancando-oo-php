<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro teste', 'Rua lá', '37')
    )
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->getSaldo();
