<?php
require_once 'autoload.php';


use Alura\Banco\Modelo\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Funcionario,Gerente,Desenvolvedor, EditorVideo};



$umFuncionario = new Desenvolvedor(
    'Jou Oliveira',
    new CPF('123.456.789-10'),
    1000
);

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    3000
);


$umDiretor = new Diretor(
    'Ana Cristina',
    new CPF('159.357.059-11'),
    5000

);

$umEditor = new EditorVideo(
    'Julio Cristino',
    new CPF('365.458.785-11'),
    1500
);

$umFuncionario->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();