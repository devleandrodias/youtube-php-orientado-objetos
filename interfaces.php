<?php

interface Crud
{
  public function create();
  public function ready();
  public function update();
  public function delete();
}

class Cliente implements Crud
{
  public function Create()
  {
    # code...
  }

  public function Ready()
  {
    # code...
  }

  public function Update()
  {
    # code...
  }

  public function Delete()
  {
    # code...
  }
}
