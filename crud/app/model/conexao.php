<?php

class Conexao
{
  private static $instacia;

  public static function ObterConexao()
  {
    if (!isset(self::$instacia)) :
      self::$instacia = new PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', 'root');
    else :
      return self::$instacia;
    endif;
  }
}
