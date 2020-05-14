<?php
require 'classes/produto.php';
require 'models/produto.php';

use classes\Produto as ProductClass;

$produto1 = new ProductClass();
$produto1->MostrarDetalhes();

print "<br/>";

$produto2 = new \models\Produto();
$produto2->MostrarDetalhes();
