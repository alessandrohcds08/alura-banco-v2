<?php
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';


$endereco = new Endereco('São Paulo','SP','Jardim Umarizal','Rua 1', '1', 'BL 1 AP 1');

$endereco1 = new Endereco('São Paulo','SP','Jardim Faria Lima','Rua 2', '2', '');




//$endereco->complemento = '';

echo $endereco->complemento;