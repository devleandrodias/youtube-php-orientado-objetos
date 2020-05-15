<?php

namespace App\Model;

class Produto
{
  private $id, $nome, $descricao;

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

  public function GetId()
  {
    return $this->id;
  }

  public function SetId($id)
  {
    $this->id = $id;
  }
}
