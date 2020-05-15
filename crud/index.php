<?php

require './app/model/produto.php';
require './app/model/produto-dao.php';

$produto = new App\Model\Produto();

$produto->setNome("MacBook Air 2019");
$produto->setDescricao("Appl macbook air usado 2019");

$produtoDAO = new App\Model\ProdutoDAO();
$produtoDAO->create($produto);
