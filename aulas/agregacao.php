<?php

class Produtos
{
  public $name;
  public $valor;

  function __construct($nome, $valor)
  {
    $this->nome = $nome;
    $this->valor = $valor;
  }
}

class Carrinho
{
  public $produtos;

  public function Adicionar(Produtos $produtos)
  {
    $this->produtos[] = $produtos;
  }

  public function Exibir()
  {
    foreach ($this->produtos as $produto) {
      print $produto->nome . ", adicionado com sucesso! <br/>";
    }
  }
}

$produto1 = new Produtos("MacBook Air 2017", 4000.00);
$produto2 = new Produtos("Macbook Pro 2019", 8990.00);

$carrinho = new Carrinho();
$carrinho->Adicionar($produto1);
$carrinho->Adicionar($produto2);
$carrinho->Exibir();
