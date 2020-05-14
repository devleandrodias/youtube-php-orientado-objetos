<?php

class Veiculo
{
  public $modelo;
  public $cor;
  public $ano;

  public function Andar()
  {
  }

  public function Parar()
  {
  }
}

class Carro extends Veiculo
{
}

class Moto extends Veiculo
{
}
