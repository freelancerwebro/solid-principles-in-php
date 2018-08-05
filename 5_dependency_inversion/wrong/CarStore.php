<?php

class CarStore{

  public function __construct(Golf $golf, Logan $logan, Punto $punto){
    $this->golf = $golf;
    $this->logan = $logan;
    $this->punto = $punto;
  }

}
