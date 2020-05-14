<?php

class Pessoa
{
  public $idade;

  public function __clone()
  {
    print "Clonando objeto... <br/>";
  }
}

$pessoa = new Pessoa();
$pessoa->idade = 19;

$pessoa2 = $pessoa;
$pessoa2->idade = 25;

$pessoa3 = clone $pessoa2;
$pessoa3->idade = 40;

print $pessoa->idade . "<br/>"; // Faz referencia ao objeto pessoa por isso 25
print $pessoa2->idade . "<br/>";
print $pessoa3->idade . "<br/>";
