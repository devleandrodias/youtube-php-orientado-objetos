<?php

class Newsletter
{
  public function CadastrarEmail($email)
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
      throw new Exception("O email é inválido", 1);
    else :
      print "Email cadastrado com sucesso!";
    endif;
  }
}

try {
  $newsletter = new Newsletter();
  $newsletter->CadastrarEmail("teste.gmail.com");
} catch (Exception $e) {
  print $e->getMessage();
}
