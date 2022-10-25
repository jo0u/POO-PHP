<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Pretrópolis','bairro Qualquer','Minha rua','71B');
$outroEndereco = new Endereco('Rio','Centro','Uma rua aí','50');

echo $umEndereco->cidade;

//echo $umEndereco->rua . PHP_EOL;
//echo $outroEndereco;




