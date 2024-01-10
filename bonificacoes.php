<?php
require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Gerente,Desenvolvedor,Diretor,EditorVideo};

$funcionario = new Gerente(
    new CPF('417.222.222-22'),
    'Alessandro',
    15000.00
);

$funcionario1 = new Desenvolvedor(
    new CPF('123.147.333-41'),
    'Teste',
    2000.00
);
$funcionario1->sobeDeNivel();


$funcionario2 = new Diretor(
    new CPF('312.231.313-33'),
    'Talita',
    30000.00
);


$funcionario3 = new EditorVideo(
    new CPF('132.123.123-00'),
    'Rosana',
    1500.00
);
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario);
$controlador->adicionaBonificacaoDe($funcionario1);
$controlador->adicionaBonificacaoDe($funcionario2);
$controlador->adicionaBonificacaoDe($funcionario3);

echo $controlador->recuperaTotal();