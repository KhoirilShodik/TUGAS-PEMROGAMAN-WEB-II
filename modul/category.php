<?php
class Category{
  //deklarasi variable
  private string $name;
  private bool $expensive;

  public function getName(): string{
    return $this->name;
  }

  public function setName(string $name){
    return $this->name = $name;
  }

  public function isExpensive(): bool{
    return $this->expensive;
  }

  public function setExpensive(bool $expensive){
    return $this->expensive = $expensive;
  }
  
}