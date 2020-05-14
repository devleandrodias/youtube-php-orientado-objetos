<?php

abstract class Banco
{
  protected $saldo;
  protected $limiteSaque;
  protected $juros;

  public function getSaldo()
  {
    return $this->saldo;
  }

  abstract protected function Sacar($saque);
  abstract protected function Depositar($deposito);
}

class Itau extends Banco
{
  public function Sacar($saque)
  {
    $this->saldo -= $saque;
  }

  public function Depositar($deposito)
  {
    $this->saldo += $deposito;
  }
}

$itau = new Itau();

$itau->Depositar(5000);
print $itau->getSaldo() . "<br/>";

$itau->Sacar(500);
print $itau->getSaldo() . "<br/>";
