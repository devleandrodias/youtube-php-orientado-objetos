<?php

/**
 * Composição: Uma classe cria uma instância de outra classe dentro de si própria,
 * sendo assim quando ela for destruida a outra també será
 */

class Pessoa
{
  public function AtribuirNome($nome)
  {
    return "O nome da pessoa é $nome";
  }
}

class Exibe
{
  public $pessoa;
  public $nome;

  function __construct($nome)
  {
    $this->pessoa = new Pessoa();
    $this->nome = $nome;
  }

  public function ExibirNome()
  {
    print $this->pessoa->AtribuirNome($this->nome);
  }
}

$exibir = new Exibe("Leandro Dias");

$exibir->ExibirNome();
