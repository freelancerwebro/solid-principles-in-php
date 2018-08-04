<?php

class Duck implements IBird, IFlyer{

  public function fly(){
    echo "The duck flies!";
  }

  public function eat(){
    echo "The duck eats!";
  }
}
