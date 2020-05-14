<?php

class Login
{
  public static $user;

  public static function verificaLogin()
  {
    print "O " . self::$user . " está logado";
  }
}

Login::$user = "admin";
Login::verificaLogin();
