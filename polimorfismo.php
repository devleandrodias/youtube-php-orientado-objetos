<?php

abstract class Animal
{
  public function Andar()
  {
    print "O animal andou";
  }
}

class Cavalo extends Animal
{
  public function Andar()
  {
    print "O cavalo andou <br/>";
  }
}

class Vaca extends Animal
{
}

$cavalo = new Cavalo();
print $cavalo->Andar();

$vaca = new Vaca();
print $vaca->Andar();
