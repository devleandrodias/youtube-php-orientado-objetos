<?php

namespace App\Model;

class Conexao
{
  private static $instacia;

  public static function obterConexao()
  {
    if (!isset(self::$instacia)) :
      self::$instacia = new \PDO('mysql:host=localhost:8889;dbname=pdo;charset=utf8', 'root', 'root');
    endif;

    return self::$instacia;
  }
}
