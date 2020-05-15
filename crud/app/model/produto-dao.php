<?php

namespace App\Model;

require 'conexao.php';

use App\Model\Produto;

class ProdutoDAO
{
  public function create(Produto $produto)
  {
    $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?, ?)';

    $stmt = Conexao::obterConexao()->prepare($sql);

    $stmt->bindValue(1, $produto->getNome);
    $stmt->bindValue(2, $produto->getDescricao);

    $stmt->execute();
  }

  public function read()
  {
    # code...
  }

  public function update(Produto $produto)
  {
    # code...
  }

  public function delete($id)
  {
    # code...
  }
}
