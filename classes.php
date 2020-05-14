<?php

class Pessoa
{
  public $nome;
  public $idade;

  public function Falar()
  {
    print "Olá Sr. $this->nome, sua idade é de $this->idate anos.";
  }
}

$leandro = new Pessoa();

$leandro->nome = "Leandro Dias";
$leandro->idade = 19;

$leandro->Falar();
