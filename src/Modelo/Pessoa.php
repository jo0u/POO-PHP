<?php

namespace Alura\Banco\Modelo;

final class Pessoa
{
    use AcessoPropriedades; 
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function __get(string $nomeAtributo)
    {
     
      $metodo = 'recupera'.ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}
