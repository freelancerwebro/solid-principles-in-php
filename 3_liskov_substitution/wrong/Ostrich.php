<?php

class Ostrich implements IBird{

  /**
  *   The ostrich cannot fly. Basically Ostrich class introduces new behavior to the base class Bird.
  *   So it breaks the Liskov Substitution Priciple.
  *
  */
  public function fly(){
    echo "The ostrich cannot fly!";
  }

  public function eat(){
    echo "The ostrich eats!";
  }
}
