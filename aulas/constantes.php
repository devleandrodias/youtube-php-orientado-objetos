<?php

class Pessoa
{
  const nome = "Usuário Logado";

  public function exibirNomeConstante()
  {
    print self::nome; // self se refere a constante dentro do escopo da classe
  }
}

class Leandro extends Pessoa
{
  const nome = "Oliveira";

  public function exibirNomeConstante()
  {
    print parent::nome; // parent se refere ao pai da constante
  }
}


$leandro = new Leandro();
$leandro->exibirNomeConstante();
