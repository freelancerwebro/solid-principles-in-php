<?php

class Ostrich implements IBird{

  /**
  *   The ostrich cannot fly. Basically Ostrich class introduces new behavior to the base class Bird.
  *   So it breaks the Liskov Substitution Priciple.
  *   If we change the Bird class to make some
  *
  */
  public function fly(){
    echo "The ostrich cannot fly!";
  }

  public function eat(){
    echo "The ostrich eats!";
  }
}
