<?php

class Pedido
{
  public $numero;
  public $cliente;
}

class Cliente
{
  public $nome;
}

$clienteLeandro = new Cliente();
$cliente->nome = "Leandro Dias";

$pedido = new Pedido();
$pedido->numero = 123456;
$pedido->cliente = $cliente;

$dados = array(
  'numero' => $pedido->numero,
  'nome_cliente' => $pedido->cliente->nome
);

var_dump($dados);
