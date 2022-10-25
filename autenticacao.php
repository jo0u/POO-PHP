<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Service\Autenticador;

require_once 'autoload.php';


$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'João da Silva', 
    new CPF('159.456.785-25'),
    5600
);


$autenticador->tentaLogin($umDiretor,'4321');