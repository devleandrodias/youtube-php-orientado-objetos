<?php

class Login
{
  private $email;
  private $senha;

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $emailLimpo = filter_var($email, FILTER_SANITIZE_EMAIL);
    $this->email = $emailLimpo;
  }

  public function getSenha()
  {
    return $this->senha;
  }

  public function setSenha($senha)
  {
    $this->senha = $senha;
  }

  public function Logar()
  {
    if ($this->email == "teste@gmail.com" and $this->senha == "123456") :
      print "Usuário logado com sucesso!";
    else :
      print "Email e/ou senha inválidos!";
    endif;
  }
}

$logar = new Login();

$logar->setEmail("teste@gmail.com");
$logar->setSenha("123456");
$logar->Logar();
