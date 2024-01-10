<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Gerente,Diretor};
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Gerente(
    new CPF('417.222.222-22'),
    'Alessandro',
    30000
);

$autenticador->tentaLogin($diretor, '4321');
