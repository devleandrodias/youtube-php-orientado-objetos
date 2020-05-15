<?php

class Produto
{
  private $nome, $descricao;

  public function GetNome()
  {
    return $this->nome;
  }

  public function SetNome($nome)
  {
    $this->nome = $nome;
  }

  public function GetDescricao()
  {
    return $this->descricao;
  }

  public function SetDescricao($descricao)
  {
    $this->descricao = $descricao;
  }
}
