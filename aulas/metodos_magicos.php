<?php

class Pessoa
{
  private $dados;

  function __set($nome, $valor)
  {
    $this->dados[$nome] = $valor;
  }

  function __get($nome)
  {
    return $this->dados[$nome];
  }

  function __toString()
  {
    return "Tentei imprimir o objeto...";
  }

  function __invoke()
  {
    return "Tentei imprimir um método como função...";
  }
}

$pessoa = new Pessoa();

$pessoa->nome = "Leandro Dias";
$pessoa->idade = 19;

print $pessoa->nome;
print "<br/>";

print $pessoa->idade;
print "<br/>";

print $pessoa;
print "<br/>";

print $pessoa();
print "<br/>";
