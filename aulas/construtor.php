<?php

class Pessoa
{
  public $nome;

  public function __construct()
  {
    $this->setName("Usuário Anônimo");
  }

  public function getName()
  {
    return $this->nome;
  }

  public function setName($nome)
  {
    $this->nome = $nome;
  }

  public function Comprimentar()
  {
    print "Olá $this->nome";
  }
}

$leandro = new Pessoa();

$leandro->Comprimentar();
